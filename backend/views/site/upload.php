<h1>UploadForm</h1>

<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datetimepicker\DateTimePicker;


$form = ActiveForm::begin([
    'id' => 'upload-form',
    'options' => ['class' => 'form-horizontal'],
]) ?>

<div class="container">
    <div class="row">
        <div class="col-lg-offset-1 col-lg-10">
            <?= $form->field($model, 'title') ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-offset-1 col-lg-10" style="padding-left: 0px">
            <div><b>Текст статьи</b></div>
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
            </div>
        </div>
    </div>
    <div class="col-lg-offset-1 col-lg-10">
        <?= $form->field($model, 'annotation') ?>
    </div>
    <div class="row" style="height: 10px"></div>
    <div class="row">
        <div class="col-lg-offset-1 col-lg-10">
            <div><b>Дата публикации</b></div>
            <div class="row">
                <div class="col-lg-5">
                    <?= DateTimePicker::widget([
                        'model' => $model,
                        'attribute' => 'pubday',
                        'language' => 'ru',
                        'size' => 'ms',
                        'clientOptions' => [
                            'autoclose' => true,
                            'format' => 'yyyy-mm-dd',
                            'todayBtn' => true
                         ]
                    ]);?>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-offset-1 col-lg-10 fileInput">
            <?= $form->field($model, 'image')->fileInput() ?>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('public', ['class' => 'btn btn-primary']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end() ?>

</div>










