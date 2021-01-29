<?php

use yii\helpers\Html;
use app\assets\AdminLteAsset;
use cybercog\yii\googleanalytics\widgets\GATracking;

AdminLteAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<?= GATracking::widget([
    'trackingId' => 'UA-167437854-1',
]) ?>
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
<body class="hold-transition skin-purple sidebar-mini">
<?php $this->beginBody() ?>

<div class="wrapper">

    <?= $this->render('header.php'); ?>

    <?= $this->render('left.php'); ?>

    <?= $this->render('content.php', [
        'content' => $content
    ]); ?>

</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
