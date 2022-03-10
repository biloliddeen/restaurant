<?php

use mihaildev\ckeditor\CKEditor;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Specials */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="specials-form">
    <div class="container">
        <div class="row">
            <div class="col-10 m-auto">

                <h1><?= Html::encode($this->title) ?></h1>

                <?php $form = ActiveForm::begin([
                    'options' => [
                        'enctype' => 'multipart/form-data'
                    ]
                ]); ?>

                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'content')->widget(CKEditor::className(),[
                    'editorOptions' => [
                        'preset' => 'standart',
                        'inline' => false,
                        'row' => 10
                    ]
                ]) ?>
                <?= $form->field($model, 'image', [
                    'template' =>
                        '<label for="inputFile">Image</label>
                        <div class="custom-file">
                            {label}
                            {input}
                            {error}
                        </div>',
                        'inputOptions' => [ 'class' => 'custom-file-input', 'id' => 'customFile'],
                        'labelOptions' => [ 'class' => 'custom-file-label']
                ])->fileInput() ?>


                <div class="form-group col-3 p-0">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-block btn-primary btn-sm']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
