
<?php
use yii\helpers\Html;
?>
<?php foreach ($posts as $post): ?>

<div class=" col-lg-4" style="height: 450px">
    <h3> <a href ="<?= \yii\helpers\Url::to(['site/new', 'id' => $post->id]) ?>"> <?= $post->title  ?> </a></h3>
    <h6> <?= Yii::$app->formatter->asDate($post->pubday, 'long') ?> </h6>
 <img src="<?=$post->respicref ?> " alt="">
    <?= substr($post->text, 0, 300) ?>
<!--    <div class="form-group">-->
<!--        <div class="col-lg-4">-->
<!--            --><?//= Html::submitButton('Изменить', ['class' => 'btn btn-primary']) ?>
<!--        </div>-->
<!--    </div>-->
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
