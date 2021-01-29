<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Viz */

$this->title = $model->judul;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Vizs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="viz-view pt-75">

    <h1><?= Html::encode($this->title) ?></h1>

    <img src="<?= Url::to(['/storages/sampul/'.$model->sampul]);?>" alt="news">
    <hr />
    <div class="row">
        <div class="col-lg-3 col-md-3 col-xs-3">
            <center><i class="lni-thumbs-up"></i>  <?= $model->suka;?></center>
        </div>
        <div class="col-lg-3 col-md-3 col-xs-3">
            <center><i class="lni-thumbs-down"></i>  <?= $model->tidak_suka;?></center>
        </div>
        <div class="col-lg-3 col-md-3 col-xs-3">
            <center><i class="lni-eye"></i>  <?= $model->dilihat;?></center>
        </div>
        <div class="col-lg-3 col-md-3 col-xs-3">
            <center><i class="lni-share"></i>  <?= $model->dibagikan;?></center>
        </div>
    </div>

</div>
