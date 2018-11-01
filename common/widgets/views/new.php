<div class="col-lg-offset-5"><h1>Last posts</h1></div>
<!--<div class="row">-->
<!--    --><?// if($posts === 'Новостей нет :('):?>
<!--    <h1>--><?//= $posts?><!--</h1>-->
<!--    --><?// else: ?>
<!--    --><?// foreach($posts as $post):  ?>
<!--    <div class="col-lg-4">-->
<!--        <a href ="#"><h3>--><?//= $post->title  ?><!-- </h3> </a>-->
<!--        <img src="--><?//=$post->picref ?><!-- " alt="">-->
<!--        --><?//= substr($post->text, 0, 300) ?>
<!--    </div>-->
<?// endforeach;
//endif;?>
<!--</div>-->

<div class="row">
    <? if($posts === null):?>
        <h1><?= "nope"?></h1>
    <? else: ?>
        <? foreach($posts as $post):  ?>
            <div class="col-lg-4">
                <a href ="<?= \yii\helpers\Url::to(['site/new', 'id' => $post->id])?>"><h3><?= $post->title  ?> </h3> </a>
                <img src="<?=$post->respicref ?> " alt="">
                <?= substr($post->text, 0, 300) ?>
            </div>
        <? endforeach;
    endif;?>
</div>