<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use mihaildev\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model common\models\Packages */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="packages-form">

    <div class="container">
        <div class="row">
            <div class="col-9 m-auto">
            <h1><?= Html::encode($this->title) ?></h1>
            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'price')->textInput() ?>

            <?= $form->field($model, 'description')->widget(CKEditor::className(),[
                'editorOptions' => [
                    'preset' => 'standart',
                    'inline' => false, 
                    'row' => 5
                ],
            ]) ?>

            <?= $form->field($model, 'image',[
                'template' => 
                '<label for="inputFile">Image</label>
                <div class="custom-file">
                    {label}
                    {input}
                    {error}  
                 </div>
                ',
                'inputOptions' => ['class' => 'custom-file-input', 'id' => 'customFile'],
                'labelOptions' => ['class' => 'custom-file-label'],
            ])->fileInput() ?>

            <div class="form-group col-3 p-0">
                <?= Html::submitButton('Save', ['class' => 'btn btn-block btn-primary btn-sm']) ?>
            </div>

            <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>

</div>
