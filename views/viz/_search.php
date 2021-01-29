<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VizSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="viz-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?php $form->field($model, 'id') ?>

    <?= $form->field($model, 'judul')->textInput(['placeholder' => 'keywords'])->label(false) ?>

    <?php $form->field($model, 'deskripsi') ?>

    <?php $form->field($model, 'penjelasan') ?>

    <?php $form->field($model, 'tipe') ?>

    <?php // echo $form->field($model, 'suka') ?>

    <?php // echo $form->field($model, 'tidak_suka') ?>

    <?php // echo $form->field($model, 'dilihat') ?>

    <?php // echo $form->field($model, 'dibagikan') ?>

    <?php // echo $form->field($model, 'sampul') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'deleted_at') ?>

    <?php // echo $form->field($model, 'terbit')->checkbox() ?>

    <div class="form-group pull-right">
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
