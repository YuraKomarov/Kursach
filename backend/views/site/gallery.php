<h1>Gallery</h1>

<?php foreach($pictures as $pic): ?>

    <div class="col-lg-4">
        <img class="galleryPic bord" src="<?= $pic->path?>" width="360px" alt="">
    </div>



<?php endforeach; ?>

<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;


$form = ActiveForm::begin([
    'id' => 'gallery-form',
    'options' => ['class' => 'form-horizontal'],
]) ?>
<div class="row">
    <div class="col-lg-offset-1 col-lg-12 galleryInput">
        <?= $form->field($model, 'image')->fileInput() ?>
    </div>

</div>
    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-4">
            <?= Html::submitButton('add picture', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>


<?php ActiveForm::end() ?>


