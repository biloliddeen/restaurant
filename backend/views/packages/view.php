<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Packages */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Packages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="packages-view">

<div class="container">
        <div class="row">
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
                        'name',
                        [
                            'attribute' => 'price',
                            'value' => function($data){
                                return \Yii::$app->formatter->asCurrency($data->price);
                            }    
                        ],
                        [
                            'attribute' => 'image',
                            'format' => 'html',
                            'value' => function($data){
                                return Html::img(\Yii::getAlias('@eventImgUrl').'/'.$data->image, ['width' => '250px']);
                            }
                        ],
                        [
                            'attribute' => 'description',
                            'format' => 'html'
                        ],
                    ],
                ]) ?>
            </div>
        </div>
    </div>

</div>
