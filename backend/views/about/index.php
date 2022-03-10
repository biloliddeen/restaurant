<?php

// use Yii;

use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\grid\ActionColumn;
use yii\helpers\StringHelper;
use slavkovrn\lightbox\LightBoxWidget;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\AboutSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Abouts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create About', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            
            [
                'attribute' => 'title',
                'content' => function($data){
                    return StringHelper::truncateWords($data->title, 5);
                }
            ],
            [
                'attribute' => 'description',
                'content' => function($data){
                    return StringHelper::truncateWords($data->description, 20   );
                }
            ],
            [
                'attribute' => 'image',
                'content' => function ($data){
                    $images = [               
                        1 => [
                                'src' => Yii::getAlias('@aboutImgUrl').'/'.$data->image,
                                'title' => 'About Image',
                            ],                    
                    ];
                    return LightBoxWidget::widget([
                        'id'     =>'lightbox',  
                        'class'  =>'galary',    
                        'width' =>'150px',      
                        'images' => $images,
                    ]);
                }
            ],
            [
                'class' => ActionColumn::className(),
            ],
        ],
    ]); ?>


</div>
