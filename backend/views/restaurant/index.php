<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use slavkovrn\lightbox\LightBoxWidget;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\RestaurantSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Restaurants';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="restaurant-index">
<div class="container">
        <div class="row">
            <div class="col-10 m-auto">             
                <h1><?= Html::encode($this->title) ?></h1>

                <p>
                    <?= Html::a('Create Restaurant', ['create'], ['class' => 'btn btn-primary']) ?>
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
                            'attribute' => 'image',
                            'format' => 'html', 
                            'content' => function($data){
                                $images = [
                                    1 => [
                                        'src' => \Yii::getAlias("@restaurantImgUrl").'/'.$data->image,
                                        'title' => $data->name
                                    ]
                                ];
                                return LightBoxWidget::widget([
                                    'id' => 'lightbox',
                                    'class' => 'galary',
                                    'width' => '150px',
                                    'images' => $images
                                ]);
                            }
                        ],
                        [
                            'class' => ActionColumn::className(),
                        ],
                    ],
                ]);             
            ?>
        </div>
    </div>
</div>

</div>
