<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;


$form = ActiveForm::begin([
    'id' => 'changenews-form',
    'options' => ['class' => 'form-horizontal'],
]) ?>
<?= $form->field($model, 'title') ?>
<?//= $form->field($model, 'text') ?>
<?=  \froala\froalaeditor\FroalaEditorWidget::widget([

    'model' => $model,
    'attribute' => 'text',
    'options' => [
        // html attributes
        'id'=>'content'
    ],

    'clientOptions' => [
        'toolbarInline'=> false,
        'height' => 300,
        'theme' => 'royal',//optional: dark, red, gray, royal
        'language' => 'en_gb' ,
        'toolbarButtons' => ['fullscreen', 'bold', 'italic', 'underline', '|', 'paragraphFormat', 'insertImage'],
        'imageUploadParam' => 'picref',
        'imageUploadURL' => \yii\helpers\Url::to(['site/upload/'])
    ],
    'clientPlugins'=> ['fullscreen', 'paragraph_format', 'image']
]); ?>
<?= $form->field($model, 'pubday') ?>
    <img src="<?=$model->picref ?> " alt="">
<?= $form->field($model, 'picref')->fileInput() ?>
    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('save', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
<?php ActiveForm::end() ?>