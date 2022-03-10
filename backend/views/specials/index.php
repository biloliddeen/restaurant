<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\grid\ActionColumn;
use yii\helpers\StringHelper;
use slavkovrn\lightbox\LightBoxWidget;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\SpecialsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Specials';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="specials-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Specials', ['create'], ['class' => 'btn btn-primary']) ?>
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
                'attribute' => 'content',
                'format' => 'html',
                'content' => function($data){
                    return StringHelper::truncateWords($data->content, 25);
                }     
            ],
            [
                'attribute' => 'image',
                'format' => 'html',
                'content' => function ($data){
                    $images = [               
                        1 => [
                                'src' => Yii::getAlias('@specialsImgUrl').'/'.$data->image,
                                'title' => $data->image,
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
