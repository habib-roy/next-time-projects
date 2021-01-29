<?php

use yii\helpers\Url;

?>
<section id="about" class="about-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="about-content">
                    <div class="about-counter">
                        <div class="row">
                            <div class="col-sm-1">
                            </div>
                            <div class="col-sm-4">
                                <div class="single-counter counter-color-1 mt-30 d-flex wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                                    <div class="counter-shape">
                                        <span class="shape-1"></span>
                                        <span class="shape-2"></span>
                                    </div>
                                    <div class="counter-content media-body">
                                        <span class="counter-count"><span class="counter"><?= $viz;?></span></span>
                                        <p class="text">Visualizations</p>
                                    </div>
                                </div> <!-- single counter -->
                            </div>
                            <div class="col-sm-4">
                                <div class="single-counter counter-color-2 mt-30 d-flex wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                                    <div class="counter-shape">
                                        <span class="shape-1"></span>
                                        <span class="shape-2"></span>
                                    </div>
                                    <div class="counter-content media-body">
                                        <span class="counter-count"><span class="counter"><?= $cat;?></span></span>
                                        <p class="text">Categories</p>
                                    </div>
                                </div> <!-- single counter -->
                            </div>
                            <div class="col-sm-3">
                                <div class="single-counter counter-color-3 mt-30 d-flex wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
                                    <div class="counter-shape">
                                        <span class="shape-1"></span>
                                        <span class="shape-2"></span>
                                    </div>
                                    <div class="counter-content media-body">
                                        <span class="counter-count"><span class="counter"><?= $req;?></span></span>
                                        <p class="text">Requests</p>
                                    </div>
                                </div> <!-- single counter -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- about counter -->
                </div> <!-- about content -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== ABOUT PART ENDS ======-->

<!--====== OUR SERVICE PART START ======-->

<section id="services" class="our-services-area pt-115">
    <div class="container">
        <div class="header-hero-content text-center">
            <h1 style="font-size: 40px;" class="hero-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"><b>The amazing tools what make this happen.</b></h1>
            <p style="font-size: 20px;">An honor we can mention, please.</p></br>
        </div> <!-- header hero content -->
    </div>
</section>

<!--====== BRAND PART START ======-->

<div id="brand" class="brand-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="brand-wrapper pt-45 clearfix">
                    <div class="single-brand mt-50 text-md-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <img src="<?= Url::to(['/images/optimap.png']);?>" alt="brand" style="width:111px;">
                    </div> <!-- single brand -->
                    <div class="single-brand mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                        <img src="<?= Url::to(['/images/mapbox-gl.png']);?>" alt="brand" style="width:211px;margin-left:-145px;">
                    </div> <!-- single brand -->
                    <div class="single-brand mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                        <img src="<?= Url::to(['/images/alibaba-cloud.png']);?>" alt="brand" style="width:231px;margin-top:30px;">
                    </div> <!-- single brand -->
                    <div class="single-brand mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="<?= Url::to(['/images/yii2.png']);?>" alt="brand" style="width:131px;margin-top:16px;margin-right:-110px;">
                    </div> <!-- single brand -->
                    <div class="single-brand mt-50 text-md-right wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                        <img src="<?= Url::to(['/images/postgis.png']);?>" alt="brand" style="width:131px;margin-top:20px;">
                    </div> <!-- single brand -->
                </div> <!-- brand wrapper -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</div>