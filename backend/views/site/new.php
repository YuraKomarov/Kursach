
<div class="col-lg-offset-4 col-lg-4">

    <h1> <?= $result->title ?> </h1>

</div>
<div class="row">
    <div class ="col-lg-12">
      <img src=" <?=  $result->fordetail ?> " alt="" class="img-fluid" alt="Responsive image">
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