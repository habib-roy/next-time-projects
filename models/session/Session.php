<?php

namespace app\models\session;

use Yii;
use app\models\user\User;
use Wikimedia\PhpSessionSerializer;

/**
 * This is the model class for table "user_session".
 *
 * @property string $id
 * @property int $expire
 * @property resource $data
 * @property int $user_id
 */
class Session extends \yii\db\ActiveRecord
{
    public function init()
    {
        PhpSessionSerializer::setSerializeHandler();
        parent::init();
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'session';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['user_id'], 'default', 'value' => null],
            [['expire', 'user_id'], 'integer'],
            [['data'],'safe'],
            [['id'], 'string', 'max' => 40],
            [['id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'expire' => 'Expire',
            'data' => 'Data',
            'user_id' => 'User ID',
        ];
    }

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    public function getIsExpired()
    {
        return $this->expire < time();
    }

    public function decode()
    {
        // read from the start of stream
        $data = stream_get_contents($this->data,-1,0);
        try {
            return PhpSessionSerializer::decode((string) $data);
        } catch (\Exception $e) {
            return null;
        }
    }

    public function encode($data)
    {
        try {
            $this->data = PhpSessionSerializer::encode($data);
            return $this->save();
        } catch (\Exception $e) {
            return false;
        }
    }
}
