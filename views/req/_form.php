<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Req */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="req-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'judul')->textInput() ?>

    <?= $form->field($model, 'deskripsi')->textarea(['rows' => 6]) ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'atas_nama')->textInput() ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'surel')->textInput() ?>
        </div>
    </div>

    <?php $form->field($model, 'didukung')->textInput() ?>

    <?php $form->field($model, 'dibagikan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success btn-block']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
