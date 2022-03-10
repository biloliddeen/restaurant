    <?php

    /* @var $this yii\web\View */
    /* @var $form yii\bootstrap4\ActiveForm */
    /* @var $message \frontend\controllers\SiteController */
    /* @var $success \frontend\controllers\SiteController */

    use yii\bootstrap4\Html;
    use yii\bootstrap4\ActiveForm;
    ?>
        <?php if (Yii::$app->session->hasFlash('success')):?>
            <div class="alert alert-success alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <?= Yii::$app->session->getFlash('success') ?>
            </div>
        <?php endif;?>
        <?php if (Yii::$app->session->hasFlash('error')):?>
            <div class="alert alert-danger alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <?= Yii::$app->session->getFlash('error') ?>
            </div>
        <?php endif;?>

        <?php $form = ActiveForm::begin([
                'options' => [
                        'class' => 'php-email-form',
                        'data-pjax' => 1,
                ],
            ])?>

            <div class="row">
                <div class="col-md-6">
                    <?= $form->field($message, 'name')->textInput([
                        'id' => 'name',
                        'class' => 'form-control',
                        'placeholder' => 'Your Name',

                    ])?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($message, 'email')->textInput([
                        'id' => 'email',
                        'class' => 'form-control',
                        'placeholder' => 'Your Email'
                    ]) ?>
                </div>
            </div>


            <?= $form->field($message, 'subject')->textInput([
                'id' => 'subject',
                'class' => 'form-control',
                'placeholder' => 'Subject'
            ]) ?>

            <?= $form->field($message, 'description')->textarea([
                'rows' => 6,
                'class' => 'form-control',
                'placeholder' => 'Message'
            ]) ?>

            <div class="text-center">
                <?= Html::submitButton('Send Message', ['id' => 'submit-contact', 'name' => 'contact-button']) ?>
            </div>

        <?php ActiveForm::end(); ?>
