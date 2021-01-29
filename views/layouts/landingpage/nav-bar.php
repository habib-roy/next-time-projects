<?php

use yii\helpers\Url;

?>

<div class="preloader">
    <div class="loader">
        <div class="ytp-spinner">
            <div class="ytp-spinner-container">
                <div class="ytp-spinner-rotator">
                    <div class="ytp-spinner-left">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                    <div class="ytp-spinner-right">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<header class="header-area">
    <div class="navbar-area headroom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="index.html">
                            <img src="<?= Url::to(['/images/logo.png']);?>" alt="Logo" style="width:88px;">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="<?= Url::to(['/']);?>">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= Url::to(['/viz']);?>">Visualizations</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= Url::to(['/req']);?>">Requests</a>
                                </li>
                                <?php if (Yii::$app->user->isGuest) {;?>
                                    <li class="nav-item">
                                        <a href="<?= Url::to(['/user/login']);?>">Login</a>
                                    </li>
                                <?php }else{;?>
                                    <li class="nav-item">
                                        <a href="<?= Url::to(['/dasbor']);?>">Dashboard</a>
                                    </li>
                                <?php };?>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>