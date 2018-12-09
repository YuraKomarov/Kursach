
<? if($newsCount->newsFieldCount === 3): ?>
<?php foreach ($posts as $post): ?>
        <a href ="<?= \yii\helpers\Url::to(['site/new', 'id' => $post->id]) ?>">
            <div class=" col-lg-4" style="height: 530px">
                <h3 class="title" style="height: 45px">  <?= $post->title  ?> </h3>
                <h6> <?= Yii::$app->formatter->asDate($post->pubday, 'long') ?> </h6>
                <img class="bord" src="<?=$post->respicref ?> " alt="">
                <?= substr($post->text, 0, 300) ?>

            </div>
        </a>
<? endforeach;?>
<?endif;?>

<? if($newsCount->newsFieldCount === 2): ?>
    <?php foreach ($posts as $post): ?>
        <a href ="<?= \yii\helpers\Url::to(['site/new', 'id' => $post->id]) ?>">

               <div class=" col-lg-6" style="height: 666px">
                   <h3 class="title" style="height: 45px">  <?= $post->title  ?> </h3>
                   <h6> <?= Yii::$app->formatter->asDate($post->pubday, 'long') ?> </h6>
                   <img class="bord" src="<?=$post->picref ?>" alt="" width="540px">
                   <?= substr($post->text, 0, 450) ?>
                </div>
        </a>
    <? endforeach;?>
<?endif;?>

<? if($newsCount->newsFieldCount === 1): ?>
    <?php foreach ($posts as $post): ?>
        <a href ="<?= \yii\helpers\Url::to(['site/new', 'id' => $post->id]) ?>">
        <div class=" col-lg-12" style="height: 450px">
            <div class="col-lg-6">
                <h3 class="title" style="height: 45px">  <?= $post->title  ?> </h3>
                <h6> <?= Yii::$app->formatter->asDate($post->pubday, 'long') ?> </h6>
                <img class="bord" src="<?=$post->picref ?>" alt="" width="540px">
            </div>
            <div class="col-lg-6"style="height: 355px; margin-top: 95px">
            <?= substr($post->text, 0, 650) ?>
            </div>
        </div>
        </a>
    <? endforeach;?>
<?endif;?>

<?php
use yii\widgets\LinkPager;
?>

<div class="col-lg-offset-5 col-lg-8">
<?
echo LinkPager::widget([
'pagination' => $pages,
]);
?>
</div>
