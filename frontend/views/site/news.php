

<?php foreach ($posts as $post): ?>

<div class=" col-lg-4" style="height: 530px">
    <h3 class="title" style="height: 45px"> <a href ="<?= \yii\helpers\Url::to(['site/new', 'id' => $post->id]) ?>"> <?= $post->title  ?> </a></h3>
    <h6> <?= Yii::$app->formatter->asDate($post->pubday, 'long') ?> </h6>
 <img src="<?=$post->respicref ?> " alt="">
    <?= substr($post->text, 0, 300) ?>

</div>

<? endforeach;?>



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
