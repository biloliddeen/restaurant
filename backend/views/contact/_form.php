<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Contact */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contact-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'days_hours')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'call1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'call2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link4')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
