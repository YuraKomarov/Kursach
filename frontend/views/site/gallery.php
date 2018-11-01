<?php
use kv4nt\owlcarousel\OwlCarouselWidget;

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
foreach($pictures as $pic){
    echo '<div class="item-class"><a href="http://yii/site/news"> <img class="bord" src="'.$pic->path.'" alt="'.$pict->name.'"></a></div>';
}
?>


<?php OwlCarouselWidget::end(); ?>
<?php
foreach($pictures as $pict){
    echo '<div class="col-lg-4" style="margin-top: 20px"><img src="'.$pict->path.'" alt="'.$pict->name.'" style="width:360px"></div>';
}
?>