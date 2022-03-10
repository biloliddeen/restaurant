<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\grid\ActionColumn;
use yii\helpers\StringHelper;
use slavkovrn\lightbox\LightBoxWidget;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\PackagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Packages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="packages-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Packages', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'name',
            'price:currency',
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
                        'src' => Yii::getAlias('@eventImgUrl').'/'.$data->image,
                        'title' => $data->name
                        ]
                    ];
                    return LightBoxWidget::widget([
                        'id' => 'lightbox',
                        'class' => 'galary',
                        'width' => '200px',
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
