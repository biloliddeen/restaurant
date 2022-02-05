<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Choose */

$this->title = 'Create Choose';
$this->params['breadcrumbs'][] = ['label' => 'Chooses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="choose-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
