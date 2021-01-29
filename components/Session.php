<?php

namespace app\components;

use Yii;
use yii\db\Query;
use yii\web\DbSession;
use yii\helpers\ArrayHelper;
use Wikimedia\PhpSessionSerializer;
use app\models\session\Session as SessionModel;

class Session extends DbSession
{
    public function init()
    {
        PhpSessionSerializer::setSerializeHandler();
        parent::init();
    }

    public function writeSession($id, $data)
    {
        // exception must be caught in session write handler
        // https://secure.php.net/manual/en/function.session-set-save-handler.php#refsect1-function.session-set-save-handler-notes
        try {
            // ensure backwards compatability (fixed #9438)
            if ($this->writeCallback && !$this->fields) {
                $this->fields = $this->composeFields();
            }
            // ensure data consistency
            if (!isset($this->fields['data'])) {
                $this->fields['data'] = $data;
            } else {
                $_SESSION = $this->fields['data'];
            }
            // ensure 'id' and 'expire' are never affected by [[writeCallback]]
            $user_id = isset($_SESSION[\Yii::$app->user->idParam]) ? $_SESSION[\Yii::$app->user->idParam] : null;
            $this->fields = array_merge($this->fields, [
                'id' => $id,
                'expire' => time() + $this->getTimeout(),
                'user_id' => $user_id,
            ]);
            $this->fields = $this->typecastFields($this->fields);
            $this->db->createCommand()->upsert($this->sessionTable, $this->fields)->execute();
            $this->fields = [];
        } catch (\Exception $e) {
            Yii::$app->errorHandler->handleException($e);
            return false;
        }
        return true;
    }

    protected function composeFields($id = NULL, $data = NULL)
    {
        $fields = [
            'data' => $data,
        ];
        if ($this->writeCallback !== null) {
            $fields = array_merge(
                $fields,
                call_user_func($this->writeCallback, $this)
            );
            if (!is_string($fields['data'])) {
                // $_SESSION = $fields['data'];
                // $fields['data'] = session_encode();
                $fields['data'] = PhpSessionSerializer::encode($fields['data']);
            }
        }
        $fields = array_merge($fields, [
            'id' => $id,
            'expire' => time() + $this->getTimeout(),
        ]);
        return $fields;
    }

    public function getModel()
    {
        return $this->findSession(session_id());
    }

    protected function findSession($id)
    {
        return SessionModel::findOne($id);
    }
}
