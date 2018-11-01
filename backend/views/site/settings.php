<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;


$form = ActiveForm::begin([
    'id' => 'settings-form',
    'options' => ['class' => 'form-horizontal'],
]) ?>
<div class="col-lg-offset-1 col-lg-5"> <?= $form->field($model, 'email') ?> </div>

<div class="form-group">
    <div class="col-lg-offset-1 col-lg-11">
        <?= Html::submitButton('save', ['class' => 'btn btn-primary']) ?>
    </div>
</div>
<?php ActiveForm::end() ?>
