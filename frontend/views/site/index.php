<?php
use kv4nt\owlcarousel\OwlCarouselWidget;
use rmrevin\yii\fontawesome\FontAwesome;
OwlCarouselWidget::begin([
    'container' => 'div',
    'containerOptions' => [
        'id' => 'container-id',
        'class' => 'container-class col-lg-offset-1 col-lg-10'
    ],
    'pluginOptions'    => [
        'autoplay'          => true,
        'autoplayTimeout'   => 3000,
        'items'             => 1,
        'loop'              => true,
        'itemsDesktop'      => [1199, 1],
        'itemsDesktopSmall' => [979, 1]
    ]
]);
?>
<?php
//foreach($lastPosts as $p){
//    echo '<div class="item-class" ><a href="/site/'.$p->id.'"> <img class="bord" src="'.$p->fordetail.'" alt=""><div class="carousel-caption d-none d-md-block"><h1 class="title">'.$p->title.'</h1><p>'.$p->annotation.'</p></div></a></div>';
//}
//?>
<?php
foreach($posts as $p){
echo '<div class="item-class" ><a href="/site/'.$p->id.'"> <img class="bord" src="'.$p->fordetail.'" alt=""><div class="carousel-caption d-none d-md-block"><h1 class="title">'.$p->title.'</h1><p>'.$p->annotation.'</p></div></a></div>';
}
?>
<?php OwlCarouselWidget::end(); ?>
<div class="row lastnews">
    <div class="col-lg-offset-4">
        <h1 class="title">Последние новости на сайте</h1>
    </div>
</div>
<?php foreach ($posts as $post): ?>
    <a href ="<?= \yii\helpers\Url::to(['site/new', 'id' => $post->id]) ?>">
<div class="row">
    <div class=" col-lg-12" style="height: 250px">
        <div class="col-lg-4">
            <img class="bord" src="<?=$post->respicref ?> " alt="">
        </div>
        <div class="col-lg-8">
            <h3 class="title">  <?= $post->title  ?></h3>
            <h5> <?= Yii::$app->formatter->asDate($post->pubday, 'long') ?> </h5>
            <?= substr($post->text, 0, 351).'...' ?>
        </div>
    </div>
</div>
    </a>

<? endforeach;?>
