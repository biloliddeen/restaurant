<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use mihaildev\ckeditor\CKEditor;


/* @var $this yii\web\View */
/* @var $model common\models\About */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="about-form">
<div class="container">
        <div class="row">
            <div class="col-10 m-auto">

                <h1><?= Html::encode($this->title) ?></h1>

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
                    ],
                ]);
                ?>

                <?= $form->field($model, 'image', [
                    'template' => '
                        <label for="customFile">Image</label>
                        <div class="custom-file">
                            {label}
                            {input}
                            {error}
                        </div>', 
                        'inputOptions' => ['class' => 'custom-file-input', 'id' => 'customFile'],
                        'labelOptions' => ['class' => 'custom-file-label', 'for' => 'customFile']
                ])->fileInput()?>

                <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

                <div class="form-group col-3 p-0">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-block btn-primary btn-sm']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
