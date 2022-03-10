<?php

use slavkovrn\lightbox\LightBoxWidget;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\CarouselSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Carousels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carousel-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Carousel', ['create'], ['class' => 'btn btn-primary']) ?>
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
                    return StringHelper::truncateWords($data->description, 25);
                }
            ],
            [
                'attribute' =>  'image',
                'content' => function($data){
                    $image = [
                        1 => [
                            'src' => \Yii::getAlias('@carouselImgUrl').'/'.$data->image,
                            'title' => $data->name
                        ]
                    ];  
                    return LightBoxWidget::widget([
                        'id' => 'lightbox',
                        'class' => 'galary',
                        'width' => '150px',
                        'images' => $image
                    ]);  
                }
            ],
            [
                'class' => ActionColumn::className(),

            ],
        ],
    ]); ?>


</div>
