<h1>Gallery</h1>

<?php foreach($pictures as $pic): ?>
<div class="row">
    <div class="col-lg-offset-1 col-lg-12">
        <img src="<?= $pic->respath?>" alt="">
    </div>
</div>


<?php endforeach; ?>

<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;


$form = ActiveForm::begin([
    'id' => 'gallery-form',
    'options' => ['class' => 'form-horizontal'],
]) ?>

<?= $form->field($model, 'image')->fileInput() ?>
    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('add picture', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
<?php ActiveForm::end() ?>


