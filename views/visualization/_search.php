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

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'judul') ?>

    <?= $form->field($model, 'deskripsi') ?>

    <?= $form->field($model, 'penjelasan') ?>

    <?= $form->field($model, 'tipe') ?>

    <?php // echo $form->field($model, 'suka') ?>

    <?php // echo $form->field($model, 'tidak_suka') ?>

    <?php // echo $form->field($model, 'dilihat') ?>

    <?php // echo $form->field($model, 'dibagikan') ?>

    <?php // echo $form->field($model, 'sampul') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'deleted_at') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
