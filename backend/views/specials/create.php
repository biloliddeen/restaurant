<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Specials */

$this->title = 'Create Specials';
$this->params['breadcrumbs'][] = ['label' => 'Specials', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="specials-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
