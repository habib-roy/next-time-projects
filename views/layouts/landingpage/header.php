<?php

use yii\helpers\Url;

?>

<div id="home" class="header-hero bg_cover d-lg-flex align-items-center" style="background-image: url(<?= Url::to(['/header.jpg']);?>)">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="header-hero-content">
                    <h1 class="hero-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"><b>Next</b> Time<br />Data <b>Visualizations.</b></h1>
                    <p class="text wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">“Visualization gives you answers to questions you didn’t know you had.” — Ben Schneiderman.</p>
                    <div class="header-singup wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">
                        <form action="/viz">
                        <input type="text" name="VizSearch[judul]" placeholder="The data what you want ...">
                        <button id="submitKeywordInput" class="main-btn" type="submit">Search</button>
                    </div>
                </div> <!-- header hero content -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
    <div class="header-hero-image d-flex align-items-center wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="1.1s">
        <div class="image">
            <img src="<?= Url::to(['/images/header-content.png']);?>" alt="Hero Image">
        </div>
    </div> <!-- header hero image -->
</div> <!-- header hero -->