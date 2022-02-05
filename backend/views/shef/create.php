<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Shef */

$this->title = 'Create Shef';
$this->params['breadcrumbs'][] = ['label' => 'Shefs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shef-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
