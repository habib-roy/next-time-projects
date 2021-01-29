<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Alert;

/**
 * @var yii\web\View $this
 * @var dektrium\user\Module $module
 */

$this->title = $title;


$css = <<<CSS
#apb-beranda {
    height: unset;
    /* min-height: 761px; */
}
#apb-beranda .text-wrap {
    height: unset;
    min-height: 619px;
    padding-bottom: 50px;
}
#apb-beranda .container {
    padding-top: 132px;
}
#apb-beranda input, #apb-beranda .text-inner, #apb-beranda .section-heading * {
    color: #fff !important;
}
#apb-beranda .form-group .help-block{
    font-size: 14px;
    height: 21px;
}
CSS;

$this->registerCss($css);

?>

<?php $this->beginBlock('section-beranda'); ?>

    <section id="apb-beranda" data-section="beranda" style="background-image: url(/images/apb/full_image_1.jpg);" data-stellar-background-ratio="0.5">
        <div class="gradient"></div>
        <div class="container">
            <div class="text-wrap">
                <div class="text-inner">
                    <div class="row">

                        <?php if ($module->enableFlashMessages): ?>
                            <div class="col-md-8 col-md-offset-2 fade to-animate" style="padding-bottom:50px;">

                                <?php foreach (Yii::$app->session->getAllFlashes() as $type => $message): ?>
                                    <?php if (in_array($type, ['success', 'danger', 'warning', 'info'])): ?>
                                        <?= Alert::widget([
                                            'options' => ['class' => 'alert-dismissible alert-' . $type],
                                            'body' => $message
                                            ]);
                                        ?>
                                    <?php endif ?>
                                <?php endforeach ?>
                            </div>
                        <?php endif ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="slant"></div>
    </section>

<?php $this->endBlock('section-beranda'); ?>
