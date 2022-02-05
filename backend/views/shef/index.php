<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\ShefSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Shefs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shef-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Shef', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'profession',
            'link1',
            'link2',
            //'link3',
            //'link4',
            //'image',
            [
                'class' => ActionColumn::className(),
            ],
        ],
    ]); ?>


</div>
