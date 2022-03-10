<?php

use yii\helpers\Html;
use kartik\date\DatePicker;
use kartik\time\TimePicker;
use mihaildev\ckeditor\CKEditor;
use yii\bootstrap4\ActiveForm;
use yii\widgets\MaskedInput;

/* @var $this yii\web\View */
/* @var $model common\models\Order */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-form">
    <div class="container">
        <div class="row">
            <div class="col-10 m-auto">
                <h1><?= Html::encode($this->title) ?></h1>
                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'email')->widget(\yii\widgets\MaskedInput::class, [
                    'clientOptions' => [
                        'alias' =>  'email'
                    ],                    
                ]) ?>

                <?= $form->field($model, 'phone')->widget(\yii\widgets\MaskedInput::class, [
                        'mask' => '+\9\98 (99) 999-99-99',
                        'attribute' => 'mobile'
                    ]) ?>

                <?= $form->field($model, 'date')->widget(DatePicker::classname(), [
                        'options' => [
                            'placeholder' => 'Date',
                            'class' => 'form-control',
                        ],
                        'pluginOptions' => [
                            'format' => 'yyyy-mm-dd'
                        ]
                    ]) ?>

                <?= $form->field($model, 'time')->widget(TimePicker::classname(), [
                        'options' => [
                            'placeholder' => 'Time'
                        ],
                        'pluginOptions' => [
                            'format' => 'H:i:s'
                        ],
                    ]) ?>

                <?= $form->field($model, 'count')->textInput() ?>

                <?= $form->field($model, 'message')->widget(CKEditor::className(),
                [
                    'editorOptions' => 
                        [
                            'preset' => 'basic', 
                            'inline' => false,
                        ],
                ]) ?>

                <div class="form-group col-2 p-0">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-block btn-primary btn-sm']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>    
</div>
