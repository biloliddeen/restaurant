<?php
/* @var \frontend\controllers\SiteController  $order */

use kartik\date\DatePicker;
use kartik\time\TimePicker;
use \yii\bootstrap4\ActiveForm;
?>
    <?php if (Yii::$app->session->hasFlash('success')): ?>
        <div class="alert alert-success alert-dismissable">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            <?= Yii::$app->session->getFlash('success') ?>
        </div>
    <?php endif; ?>

    <?php if (Yii::$app->session->hasFlash('error')): ?>
        <div class="alert alert-danger alert-dismissable">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            <?= Yii::$app->session->getFlash('error') ?>
        </div>
    <?php endif; ?>
    <?php $form = ActiveForm::begin([
            'options' => [
                    'class' => 'php-email-form',
                    'data-pjax' => 1
            ],
    ])?>

            <div class="row">
                <div class="col-lg-4 col-md-6 form-group">
                    <?=$form->field($order, 'name', [
                            'inputOptions' => [
                                'id' => 'name',
                                'class' => 'form-control',
                                'placeholder' => 'Your Name',
                            ]
                    ])->label(false) ?>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                    <?=$form->field($order, 'email', [
                            'inputOptions' => [
                                'id' => 'email',
                                'class' => 'form-control',
                                'placeholder' => 'Your Email',
                            ]
                    ])->widget(\yii\widgets\MaskedInput::class, [
                        'clientOptions' => [
                            'alias' =>  'email'
                        ],                    
                    ])->label(false)?>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                
                    <?=$form->field($order, 'phone',[
                        'inputOptions' => [
                            'placeholder' => 'Your Phone Number'
                        ]
                    ])->widget(\yii\widgets\MaskedInput::class, [
                        'mask' => '+\9\98 (99) 999-99-99',
                        'attribute' => 'mobile'
                    ])->label(false) 
                    ?>
                 </div>
                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <?
                    echo $form->field($order, 'date')->widget(DatePicker::classname(), [
                        'options' => [
                            'placeholder' => 'Date',
                            'class' => 'form-control',
                        ],
                        'pluginOptions' => [
                            'format' => 'yyyy-mm-dd'
                        ]
                    ])->label(false)
                    ?>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <?=$form->field($order, 'time')->widget(TimePicker::classname(), [
                        'options' => [
                            'placeholder' => 'Time'
                        ],
                        'pluginOptions' => [
                            'format' => 'H:i:s'
                        ],
                    ])->label(false)?>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <?=$form->field($order, 'count', [
                        'inputOptions' => [
                            'placeholder' => '# of people',
                        ]
                    ])->label(false) ?>
                </div>
            </div>
            <div class="form-group mt-3">

                <?=$form->field($order, 'message', [
                        'inputOptions' => [
                            'rows' => 5,
                            'placeholder' => 'Message',
                        ]
                ])->textarea()->label(false)?>

            </div>

            <div class="text-center">
                <?=\yii\bootstrap4\Html::submitButton('Send Message')?>
            </div>

    <?php ActiveForm::end(); ?>

