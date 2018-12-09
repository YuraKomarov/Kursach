<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;


$form = ActiveForm::begin([
    'id' => 'settings-form',
    'options' => ['class' => 'form-horizontal'],
]) ?>
<div class="row">
    <div class="col-lg-offset-1 col-lg-4"> <?= $form->field($model, 'email') ?> </div>
</div>
<div class="row">
    <div class="col-lg-offset-1 col-lg-4"> <?= $form->field($model, 'newsFieldCount')->dropDownList([
            '1' => '1',
            '2' => '2',
            '3'=>'3']) ?> </div>
</div>
<div class="row">
    <div class="col-lg-offset-1 col-lg-4"> <?= $form->field($model, 'image')->fileInput() ?> </div>
</div>

<div class="form-group">
    <div class="col-lg-offset-1 col-lg-11">
        <?= Html::submitButton(' Сохранить', ['class' => 'btn btn-primary']) ?>
    </div>
</div>
<?php ActiveForm::end() ?>
