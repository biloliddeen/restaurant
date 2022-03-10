<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use mihaildev\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model common\models\Testimonial */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="testimonial-form">

   <div class="container">
       <div class="row">
            <div class="col-9 m-auto">

                <h1><?= Html::encode($this->title) ?></h1>

                <?php $form = ActiveForm::begin([
                    'options' => [
                        'enctype' => 'multipart/form-data'
                    ]
                ]); ?>

                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'profession')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'description')->widget(CKEditor::className(),[
                    'editorOptions' => [
                        'preset' => 'standart', 
                        'inline' => false, 
                    ],
                ]); ?>

                <?= $form->field($model, 'image', [
                    'template' => 
                        '<label>Image</label>
                        <div class="custom-file">
                            {label}
                            {input}
                            {label}
                        </div>',
                        'inputOptions' => ['class' => 'custom-file-input', 'id' => 'inputFile'],
                        'labelOptions' => ['class' => 'custom-file-label']
                ])->fileInput() ?>

                <div class="form-group col-3 p-0">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-block btn-primary btn-sm']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
       </div>
   </div>

</div>
