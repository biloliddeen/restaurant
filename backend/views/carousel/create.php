<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Carousel */

$this->title = 'Create Carousel';
$this->params['breadcrumbs'][] = ['label' => 'Carousels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carousel-create">

<?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
