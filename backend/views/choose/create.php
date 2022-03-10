<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Choose */

$this->title = 'Create Choose';
$this->params['breadcrumbs'][] = ['label' => 'Chooses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="choose-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
