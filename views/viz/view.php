<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Viz */

$this->title = $model->judul;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Vizs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="viz-view pt-120">

    <h1><?= Html::encode($this->title) ?></h1>

    <img src="<?= Url::to(['/storages/sampul/'.$model->sampul]);?>" alt="news">
    <hr />
    <div class="row">
        <div class="col-lg-3 col-md-3 col-xs-3">
            <center><i class="lni-thumbs-up"></i>  <?= $model->suka;?></center>
        </div>
        <div class="col-lg-3 col-md-3 col-xs-3">
            <center><i class="lni-thumbs-down"></i>  <?= $model->tidak_suka;?></center>
        </div>
        <div class="col-lg-3 col-md-3 col-xs-3">
            <center><i class="lni-eye"></i>  <?= $model->dilihat;?></center>
        </div>
        <div class="col-lg-3 col-md-3 col-xs-3">
            <center><i class="lni-share"></i>  <?= $model->dibagikan;?></center>
        </div>
    </div>
    <hr />
    <div id="disqus_thread"></div>
    <script>
        /**
        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
        var disqus_config = function () {
        this.page.url = '<?= Url::canonical();?>';  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = 'viz-<?= $model->id;?>'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://next-time.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
</div>
