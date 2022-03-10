<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Shef */

$this->title = 'Create Shef';
$this->params['breadcrumbs'][] = ['label' => 'Shefs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shef-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
