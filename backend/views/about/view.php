<?php

// use Yii;
use yii\web\YiiAsset;
use yii\bootstrap4\Html;
use yii\widgets\DetailView;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $model common\models\About */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Abouts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
      YiiAsset::register($this);
?>
<div class="about-view">
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
                        'title',
                        [
                            'attribute' => 'image',
                            'format' => 'html',
                            'value' => function($data){
                                return Html::img(Yii::getAlias('@aboutImgUrl').'/'.$data->image, ['width' =>250,]);
                            },
                            
                        ],
                        [
                            'attribute' => 'description',
                            'format' => 'html',
                        ],
                        'link',
                    ],
                ]) ?>
            </div>
        </div>
    </div>
</div>
