
<div class="col-lg-offset-4 col-lg-4">

    <h1 class="title"> <?= $result->title ?> </h1>

</div>
<div class="row">
    <div class ="col-lg-12">
      <img src=" <?=  $result->fordetail ?> " class="bord" alt="">
    </div>

</div>
<div class="row">

    <div class="col-lg-12">
        <?= $result->text?>
    </div>

</div>
<div class="row">
    <div class="col-lg-offset-10"> <?= Yii::$app->formatter->asDate($result->pubday, 'long')?> </div>
</div>