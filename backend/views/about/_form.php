<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use mihaildev\ckeditor\CKEditor;


/* @var $this yii\web\View */
/* @var $model common\models\About */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="about-form">

    <?php $form = ActiveForm::begin([
        'options' => [
            'enctype' => 'multipart/form-data',
        ]
    ]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?=$form->field($model, 'description')->widget(CKEditor::className(),[
        'editorOptions' => [
            'preset' => 'standart', 
            'inline' => false,
            'row' => 5
        ],
    ]);
    ?>

    <?= $form->field($model, 'image', [
        'template' => '
            <div class="custom-file">
                {label}
                {input}
                {error}
            </div>
        ', 
        'inputOptions' => ['class' => 'custom-file-input', 'id' => 'customFile'],
        'labelOptions' => ['class' => 'custom-file-label', 'for' => 'customFile']
    ])->fileInput()->label('Image') ?>

    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
