<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Contact */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Contacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="contact-view">  
    <div class="container">
        <div class="row ">
            <div class="col-9 m-auto">
                    <h1><?= Html::encode($this->title) ?></h1>
                
                    <p>
                        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                            'class' => 'btn btn-danger',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]) ?>
                    </p>
                    <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                            'id',
                            'location',
                            'from_hour',
                            'to_hour',
                            'email1:email',
                            'email2:email',
                            'call1',
                            'call2',
                            [
                                'attribute' => 'link1',
                                'format' => 'html',
                                'value' => function($data){
                                    if($data->link1 == ''){
                                        return "<span class='badge badge-danger'>Link not included</span>";
                                    }
                                }
                            ],
                            [
                                'attribute' => 'link2',
                                'format' => 'html',
                                'value' => function($data){
                                    if($data->link2 == ''){
                                        return "<span class='badge badge-danger'>Link not included</span>";
                                    }
                                }
                            ],
                            [
                                'attribute' => 'link3',
                                'format' => 'html',
                                'value' => function($data){
                                    if($data->link3 == ''){
                                        return "<span class='badge badge-danger'>Link not included</span>";
                                    }
                                }
                            ],
                            [
                                'attribute' => 'link4',
                                'format' => 'html',
                                'value' => function($data){
                                    if($data->link4 == ''){
                                        return "<span class='badge badge-danger'>Link not included</span>";
                                    }
                                }
                            ],
                            
                        ],
                    ]) ?>
                </div>
            </div>
   </div>

</div>
