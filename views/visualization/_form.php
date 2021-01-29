<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Viz */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="viz-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="panel panel-default">
        <div class="panel-body table-responsive">

            <?php $form->field($model, 'id')->textInput() ?>

            <?= $form->field($model, 'slug')->textInput() ?>

            <?= $form->field($model, 'judul')->textInput() ?>

            <?= $form->field($model, 'deskripsi')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'penjelasan')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'tipe')->textInput() ?>

            <?= $form->field($model, 'favorite')->checkbox() ?>

            <?php $form->field($model, 'suka')->textInput() ?>

            <?php $form->field($model, 'tidak_suka')->textInput() ?>

            <?php $form->field($model, 'dilihat')->textInput() ?>

            <?php $form->field($model, 'dibagikan')->textInput() ?>

            <?= $form->field($model, 'sampul')->textarea(['rows' => 6]) ?>

            <?php $form->field($model, 'created_at')->textInput() ?>

            <?php $form->field($model, 'updated_at')->textInput() ?>

            <?php $form->field($model, 'deleted_at')->textInput() ?>

        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success btn-block']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
