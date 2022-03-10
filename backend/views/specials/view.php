<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Specials */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Specials', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="specials-view">
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
                            'attribute' => 'image',
                            'format' => 'html',
                            'value' => function($data){
                            return Html::img(\Yii::getAlias('@specialsImgUrl').'/'.$data->image, ['width' => '200px']);  
                            } 
                        ],
                        [   
                            'attribute' => 'content',
                            'format' => 'html'
                        ],
                    ],
                ]) ?>
            </div>
        </div>
    </div>
</div>
