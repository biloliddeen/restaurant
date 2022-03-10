<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use kartik\time\TimePicker;


/* @var $this yii\web\View */
/* @var $model common\models\Contact */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contact-form">
    <div class="container">
        <div class="row">
            <div class="col-9 m-auto">
                <h1><?= Html::encode($this->title) ?></h1>
                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>

                <!-- <?=$form->field($model, 'from_hour')->widget(TimePicker::classname(), [
                    'options' => [
                        'id' => 'from_hour',
                        'class' => 'form-control',
                        'name' => 'from_hour',
                        'placeholder' => 'Time',
                        'value' => '11:00 AM'
                    ],
                    'value' => false
                ])?> -->

                <?=$form->field($model, 'from_hour')->widget(TimePicker::classname(), [
                    'options' => [
                        'value' => '11:00 AM',
                    ],
                    'value' => false        
                ]);?>

                <?=$form->field($model, 'to_hour')->widget(TimePicker::classname(), [
                        'options' => [
                            'value' => '11:00 PM',
                        ],
                        'value' => false
                ])?>

                <?= $form->field($model, 'email1')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'email2')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'call1')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'call2')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'link1')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'link2')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'link3')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'link4')->textInput(['maxlength' => true]) ?>

                <div class="form-group col-3 p-0">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-block btn-primary btn-sm']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
