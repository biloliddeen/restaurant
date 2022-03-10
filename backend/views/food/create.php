<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Food */

$this->title = 'Create Food';
$this->params['breadcrumbs'][] = ['label' => 'Foods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="food-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
