<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Shef */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Shefs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="shef-view">
    <div class="container">
        <div class="row">
            <div class="col-10 m-auto">
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
                        'name',
                        'profession',
                        [
                            'attribute' => 'image',
                            'format' => 'html',
                            'value' => function($data){
                                return Html::img(\Yii::getAlias('@chefsImgUrl').'/'.$data->image,['width' => '200px']);
                            }
                        ],
                        [
                            'attribute' => 'link1',
                            'format' => 'html',
                            'value' => function($data){
                                if($data->link1 == ''){
                                    return '<span class="badge badge-danger">Link not included</span>';
                                }
                                return $data->link1;
                            }

                        ],
                        [
                            'attribute' => 'link2',
                            'format' => 'html',
                            'value' => function($data){
                                if($data->link2 == ''){
                                    return '<span class="badge badge-danger">Link not included</span>';
                                }
                                return $data->link3;
                            }

                        ],
                        [
                            'attribute' => 'link3',
                            'format' => 'html',
                            'value' => function($data){
                                if($data->link3 == ''){
                                    return '<span class="badge badge-danger">Link not included</span>';
                                }
                                return $data->link3;
                            }

                        ],
                        [
                            'attribute' => 'link4',
                            'format' => 'html',
                            'value' => function($data){
                                if($data->link4 == ''){
                                    return '<span class="badge badge-danger">Link not included</span>';
                                }
                                return $data->link4;
                            }

                        ],
                    ],
                ]) ?>
            </div>
        </div>
    </div>
</div>
