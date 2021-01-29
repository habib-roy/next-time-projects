<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Req */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="req-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'judul')->textInput() ?>

    <?= $form->field($model, 'deskripsi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'atas_nama')->textInput() ?>

    <?= $form->field($model, 'surel')->textInput() ?>

    <?= $form->field($model, 'didukung')->textInput() ?>

    <?= $form->field($model, 'dibagikan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
