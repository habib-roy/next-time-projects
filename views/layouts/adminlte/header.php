<?php

use yii\helpers\Url;
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">'.Yii::$app->name.'</span><span class="logo-lg">'.Yii::$app->name.'</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">

                <!-- User Account: style can be found in dropdown.less -->

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="hidden-xs"><?=(Yii::$app->user->isGuest)  ? 'Guest' : (Yii::$app->user->identity->username ? Yii::$app->user->identity->username : '-')?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <p>
                                <?=(Yii::$app->user->isGuest)  ? 'Guest' : (Yii::$app->user->identity->username ? Yii::$app->user->identity->username : '-')?>
                            </p>
                        </li>
                        <li class="user-footer">
                            <div class="pull-left">
                            </div>
                            <div class="pull-right">
                            <?php if (!Yii::$app->user->isGuest) {;?>
                                <?= Html::a(
                                    'Sign out',
                                    ['/site/logout'],
                                    ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                                ) ?>
                            <?php }; ?>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
