<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Choose */

$this->title = 'Update Choose: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Chooses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="choose-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
