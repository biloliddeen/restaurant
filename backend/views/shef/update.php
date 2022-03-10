<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Shef */

$this->title = 'Update Shef: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Shefs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="shef-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
