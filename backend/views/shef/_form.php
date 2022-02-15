<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Shef */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="shef-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'profession')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
