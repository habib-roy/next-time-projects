<?php

use dektrium\user\widgets\Connect;
use dektrium\user\models\LoginForm;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Alert;

/**
 * @var yii\web\View $this
 * @var dektrium\user\models\LoginForm $model
 * @var dektrium\user\Module $module
 */

$this->title = Yii::t('user', 'Sign in');
$this->params['breadcrumbs'][] = $this->title;
?>

<div id="login" class="row">

    <div class="col-md-4 col-sm-6 col-sm-offset-3">
        <center><h2>Sign In</h2></center><br />
        <?php $form = ActiveForm::begin([
            'id' => 'login-form',
            'enableAjaxValidation' => true,
            'enableClientValidation' => false,
            'validateOnBlur' => false,
            'validateOnType' => false,
            'validateOnChange' => false,
        ]) ?>

        <?=
            $form->field($model, 'login', [
                'inputOptions' => ['autofocus' => 'autofocus', 'class' => 'form-control text-center', 'tabindex' => '1', 'placeholder' => 'username']
            ])->label(false);
        ?>

        <?=
            $form->field($model, 'password', [
                'inputOptions' => ['class' => 'form-control text-center', 'tabindex' => '2', 'placeholder' => 'password']
            ])->passwordInput()->label(false);
        ?>

        <?php
            $form->field($model, 'rememberMe', [
                'errorOptions' => ['tag' => false]
            ])->checkbox([
                'tabindex' => '3',
                'labelOptions' => ['style' => 'font-size:20px;font-weight:200']
            ]);
        ?>

        <?= Html::submitButton('Sign In', ['class' => 'btn btn-success btn-block', 'tabindex' => '4']); ?>

        <?php ActiveForm::end(); ?>

        <p class="text-center" style="margin-top:0px;">
            <?php Html::a('Lupa password?', ['/user/recovery/request'], ['tabindex' => '5']); ?>
        </p>

        <?php if ($module->enableConfirmation): ?>
            <p class="text-center">
                <?= Html::a('Belum menerima email konfirmasi?', ['/user/registration/resend']) ?>
            </p>
        <?php endif ?>
        <?php if ($module->enableRegistration): ?>
            <p class="text-center">
                <?= Html::a('Registrasi', ['/user/registration/register']) ?>
            </p>
        <?php endif ?>

    </div>
</div>