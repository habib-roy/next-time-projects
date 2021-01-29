<?php

use yii\helpers\Html;
use app\models\Viz;
use app\models\Req;
use app\assets\LandingPageAsset;
use cybercog\yii\googleanalytics\widgets\GATracking;

LandingPageAsset::register($this);
$cache = Yii::$app->cache;
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<?= GATracking::widget([ 'trackingId' => 'UA-167437854-1' ]) ?>
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>

        <?= $this->render('nav-bar'); ?>

        <?= $this->render('header'); ?>

        <?= $this->render('precontent', [
            'viz' => $cache->getOrSet('counter-viz', function () {
                return Viz::find()->where(['terbit'=>true])->count();
            }, 60),
            'cat' => $cache->getOrSet('counter-cat', function () {
                return Viz::find()->select(['tipe'])->where(['terbit'=>true])->groupBy(['tipe'])->count();
            }, 60),
            'req' => $cache->getOrSet('counter-req', function () {
                return Req::find()->count();
            }, 60),
        ]); ?>

        <?= $this->render('content', [
            'content' => $content
        ]); ?>

        <?= $this->render('get-in-touch'); ?>

        <?= $this->render('footer'); ?>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
