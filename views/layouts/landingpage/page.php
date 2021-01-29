<?php

use yii\helpers\Url;
use yii\helpers\Html;
use app\assets\LandingPageAsset;
use cybercog\yii\googleanalytics\widgets\GATracking;

LandingPageAsset::register($this);
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

        <div id="home" class="header-hero bg_cover d-lg-flex align-items-center" style="background-image: url(<?= Url::to(['/header.jpg']);?>)">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?= $this->render('content', [
                            'content' => $content
                        ]); ?>
                    </div>
                </div> <!-- row -->
            </div>
        </div> <!-- header hero -->

        <?= $this->render('footer'); ?>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
