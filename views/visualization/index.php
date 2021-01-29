<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\VizSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Vizs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="viz-index">

    <p>
        <?= Html::a(Yii::t('app', '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Buat Visualization'), ['create'], ['class' => 'btn btn-success pull-right']) ?>
    </p><br /><br />

    <div class="panel panel-default">
        <div class="panel-body table-responsive">

            <?php Pjax::begin(); ?>
            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    // 'id',
                    'judul',
                    'deskripsi:ntext',
                    // 'penjelasan:ntext',
                    'tipe',
                    'suka',
                    'tidak_suka',
                    'dilihat',
                    'dibagikan',
                    //'sampul:ntext',
                    //'created_at',
                    //'updated_at',
                    //'deleted_at',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>

            <?php Pjax::end(); ?>

        </div>
    </div>

</div>
