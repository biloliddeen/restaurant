<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use slavkovrn\lightbox\LightBoxWidget;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\TestimonialSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Testimonials';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="testimonial-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Testimonial', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'name',
            'profession',
            [
                'attribute' => 'description',
                'format' => 'html',
                'content' => function($data){
                    return StringHelper::truncateWords($data->description, 20);
                }   
            ],
            [
                'attribute' => 'image',
                'format' => 'html',
                'content' => function($data){
                    $images = [
                        1 => [
                            'src' => \Yii::getAlias('@testimonialsImgUrl').'/'.$data->image,
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
    ]); ?>


</div>
