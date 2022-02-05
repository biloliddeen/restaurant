<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\ChooseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Chooses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="choose-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Choose', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'content:ntext',
            [
                'class' => ActionColumn::className(),

            ],
        ],
    ]); ?>


</div>
