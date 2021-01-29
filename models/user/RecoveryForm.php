<?php

namespace app\models\user;

use dektrium\user\Finder;
use dektrium\user\Mailer;
use dektrium\user\models\Token;
use dektrium\user\models\RecoveryForm as BaseRecoveryForm;

class RecoveryForm extends BaseRecoveryForm
{
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'email'    => 'Email',
            'password' => 'Password',
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            'emailTrim' => ['email', 'trim'],
            'emailRequired' => ['email', 'required', 'message' => '{attribute} harus diisi.'],
            'emailPattern' => ['email', 'email'],
            'passwordRequired' => ['password', 'required', 'message' => '{attribute} harus diisi.'],
            'passwordLength' => ['password', 'string', 'max' => 72, 'min' => 6],
        ];
    }

    /**
     * Sends recovery message.
     *
     * @return bool
     */
    public function sendRecoveryMessage()
    {
        if (!$this->validate()) {
            return false;
        }

        // $user = $this->finder->findUserByEmail($this->email);

        // case-insensitive
        $user = User::find()->where(['ilike', 'email', $this->email])->one();

        if ($user instanceof User) {
            /** @var Token $token */
            $token = \Yii::createObject([
                'class' => Token::className(),
                'user_id' => $user->id,
                'type' => Token::TYPE_RECOVERY,
            ]);

            if (!$token->save(false)) {
                return false;
            }

            if (!$this->mailer->sendRecoveryMessage($user, $token)) {
                $this->addError('email', 'Gagal mengirim panduan pemulihan.');
                return false;
            }

            \Yii::$app->session->setFlash('info', 'Email panduan pemulihan password telah terkirim. Silahkan cek kotak masuk anda.');
            return true;
        }
        $this->addError('email', 'Email tidak terdaftar.');
        sleep(0.5); // anti brute :P
        return false;
    }

    /**
     * Resets user's password.
     *
     * @param Token $token
     *
     * @return bool
     */
    public function resetPassword(Token $token)
    {
        if (!$this->validate() || $token->user === null) {
            return false;
        }

        if ($token->user->resetPassword($this->password)) {
            \Yii::$app->session->setFlash('success', 'Password Anda telah berhasil diganti.');
            $token->delete();
        } else {
            \Yii::$app->session->setFlash('danger', 'Telah terjadi kesalahan pada sistem dan password Anda gagal diganti. Silakan mencoba kembali.');
        }

        return true;
    }
}
