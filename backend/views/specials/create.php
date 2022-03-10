<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Specials */

$this->title = 'Create Specials';
$this->params['breadcrumbs'][] = ['label' => 'Specials', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="specials-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
