<?php

namespace backend\controllers;

use yii\web\Controller;
use yii\web\UploadedFile;

use common\models\Carousel;
use yii\filters\VerbFilter;
use yii\web\NotFoundHttpException;
use backend\models\search\CarouselSearch;

/**
 * CarouselController implements the CRUD actions for Carousel model.
 */
class CarouselController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Carousel models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new CarouselSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Carousel model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Carousel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Carousel();

            if ($model->load($this->request->post()) ) {
                
                $model->image = UploadedFile::getInstance($model, 'image');
               
                if($model->validate() && $model->save()){
                    $imageName = $model->image->baseName.'.'.$model->image->extension;
                    $model->image->saveAs(\Yii::getAlias('@carouselImgPath').'/'.$imageName);
                    $model->image = $imageName;
                    $model->save();
                    return $this->redirect(['view', 'id' => $model->id]); 
                }
            }
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Carousel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load($this->request->post()) ) {
                
            $model->image = UploadedFile::getInstance($model, 'image');
           
            if($model->validate() && $model->save()){
                $imageName = $model->image->baseName.'.'.$model->image->extension;
                $model->image->saveAs(\Yii::getAlias('@carouselImgPath').'/'.$imageName);
                $model->image = $imageName;
                $model->save();
                return $this->redirect(['view', 'id' => $model->id]); 
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Carousel model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Carousel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Carousel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Carousel::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
