<?php

use yii\helpers\Url;
use yii\bootstrap4\Html;
use yii\grid\GridView;
use common\models\Food;
use kartik\base\Widget;
use yii\grid\ActionColumn;
use yii\bootstrap4\Dropdown;
use yii\helpers\ArrayHelper;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\FoodSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Foods';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="food-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Food', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'name',
            [
                'attribute' => 'description',
                'content' => function($data){
                    return StringHelper::truncateWords($data->description, 5);
                }
            ],
             'price:currency',  
            [
                'attribute' => 'type',
                'filter' => Html::activeDropDownList($searchModel, 'type', ArrayHelper::map(Food::find()->asArray()->all(), 'type', 'type'), ['class' => 'form-control', 'prompt' => 'All type']),
                'format' =>'html'
            ],
            //'created_at',
            //'updated_by',
            [
                'class' => ActionColumn::className(),
            ],
        ],
    ]); ?>


</div>
