<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Specials */

$this->title = 'Update Specials: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Specials', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="specials-update">
    
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
