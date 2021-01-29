<?php

use yii\helpers\Url;

?>
<div class="container pt-115">
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <div class="section-title text-center pb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                <h4 class="title"><span>Visualization</span> Favorites.</h4>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <?php foreach ($favorites as $key => $value) {;?>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="single-blog mt-30 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.4s">
                    <div class="blog-image">
                        <a href="<?= Url::to(['/viz/view','id'=>$value->id]);?>"><img src="<?= Url::to(['/storages/sampul/'.$value->sampul]);?>" alt="news"></a>
                    </div>
                    <div class="blog-content">
                        <h4 class="blog-title"><center><a href="<?= Url::to(['/viz/view','id'=>$value->id]);?>"><?= $value->judul;?></a></center></h4><br />
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-xs-3">
                                <center><i class="lni-thumbs-up"></i>  <?= $value->suka;?></center>
                            </div>
                            <div class="col-lg-3 col-md-3 col-xs-3">
                                <center><i class="lni-thumbs-down"></i>  <?= $value->tidak_suka;?></center>
                            </div>
                            <div class="col-lg-3 col-md-3 col-xs-3">
                                <center><i class="lni-eye"></i>  <?= $value->dilihat;?></center>
                            </div>
                            <div class="col-lg-3 col-md-3 col-xs-3">
                                <center><i class="lni-share"></i>  <?= $value->dibagikan;?></center>
                            </div>
                        </div>
                    </div>
                </div> <!-- single blog -->
            </div>
        <?php };?>
    </div>
</div>