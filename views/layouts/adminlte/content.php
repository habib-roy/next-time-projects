<?php

use yii\widgets\Breadcrumbs;
use dmstr\widgets\Alert;
$roles = array_keys(Yii::$app->authManager->getRolesByUser(Yii::$app->user->getId()));
?>

<div class="content-wrapper">
    <section class="content-header">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]); ?>
    </section>

    <section class="content">
        <?= Alert::widget() ?>
        <?= $content ?>
    </section>
</div>

<footer class="main-footer">
    <strong>&copy; <?= Yii::$app->name;?> <?= date('Y') ?></strong>
    <div class="pull-right">
        <p class="pull-right"><b>Versi <?= Yii::$app->version;?></b></p>
    </div>
</footer>
