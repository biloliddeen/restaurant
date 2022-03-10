<?php

use Yii;
use yii\helpers\Url;
use yii\helpers\Html;
// use kartik\grid\GridView;
use yii\grid\GridView;
use yii\grid\ActionColumn;
use kartik\export\ExportMenu;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\OrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-index">
    <div class="container">
        <div class="row">
            <div class="col-11 m-auto">
                <h1><?= Html::encode($this->title) ?></h1>

                <p>
                    <?= Html::a('Create Order', ['create'], ['class' => 'btn btn-primary']) ?>
                </p>
             
                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
                
                   
                <?=GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        // 'id',
                        'name',
                        // 'email:email',
                        'phone',
                        [
                            'attribute' => 'date',
                            'content' => function($data){
                                return \Yii::$app->formatter->asDate($data->date);
                            }
                        ],
                        'time',
                        'count',
                        //'message:ntext',
                        //'created_at',
                        'active',
                        [
                            'class' => ActionColumn::className(),
                        ],
                    ],
                ]); ?>

            </div>
        </div>
    </div>   
</div>
<p></p>