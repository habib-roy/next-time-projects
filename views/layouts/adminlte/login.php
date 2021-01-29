<?php

use yii\helpers\Html;
use app\assets\AdminLteAsset;

AdminLteAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="hold-transition skin-purple-light">
<?php $this->beginBody() ?>

<div class="wrapper">
    
    <?= $this->render('content-login.php', [
        'content' => $content
    ]); ?>

</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
