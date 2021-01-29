<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\bootstrap\Alert;

/**
 * @var yii\web\View $this
 * @var yii\widgets\ActiveForm $form
 * @var dektrium\user\models\RecoveryForm $model
 * @var dektrium\user\Module $module
 */

$this->title = 'Lupa Password';
$this->params['breadcrumbs'][] = $this->title;

$css = <<<CSS
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

                        <div class="col-md-12 section-heading text-center" style="margin-bottom:0px;padding-bottom:0px;">
                            <h2 class="fade to-animate">Lupa Password</h2>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 subtext fade to-animate">
                                    <p style="color:rgba(255,255,255,0.8)">Masukkan alamat email Anda untuk mendapatkan petunjuk pemulihan password.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 fade to-animate">

                            <?php $form = ActiveForm::begin([
                                'id' => 'password-recovery-form',
                                'enableAjaxValidation' => true,
                                'enableClientValidation' => false,
                            ]); ?>

                            <?= $form->field($model, 'email')->textInput(['autofocus' => true, 'placeholder' => 'EMAIL', 'style' => 'text-align:center'])->label(false) ?>

                            <?= Html::submitButton('Kirim', ['class' => 'btn btn-primary btn-block']) ?><br>

                            <?php ActiveForm::end(); ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="slant"></div>
    </section>

<?php $this->endBlock('section-beranda'); ?>
