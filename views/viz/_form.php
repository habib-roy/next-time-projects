<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Viz */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="viz-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'judul')->textInput() ?>

    <?= $form->field($model, 'deskripsi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'penjelasan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tipe')->textInput() ?>

    <?= $form->field($model, 'suka')->textInput() ?>

    <?= $form->field($model, 'tidak_suka')->textInput() ?>

    <?= $form->field($model, 'dilihat')->textInput() ?>

    <?= $form->field($model, 'dibagikan')->textInput() ?>

    <?= $form->field($model, 'sampul')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'deleted_at')->textInput() ?>

    <?= $form->field($model, 'terbit')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
