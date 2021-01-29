<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Viz */

$this->title = Yii::t('app', 'Create Viz');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Vizs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="viz-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
