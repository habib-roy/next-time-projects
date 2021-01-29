<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Req */

$this->title = Yii::t('app', 'Create Req');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Reqs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="req-create">

    <h1><?= Html::encode($this->title) ?></h1><br />

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
