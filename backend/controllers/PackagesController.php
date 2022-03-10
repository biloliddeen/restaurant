<?php

namespace backend\controllers;

use common\models\Packages;
use backend\models\search\PackagesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * PackagesController implements the CRUD actions for Packages model.
 */
class PackagesController extends Controller
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
     * Lists all Packages models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PackagesSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Packages model.
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
     * Creates a new Packages model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Packages();

            if ($model->load($this->request->post())) {

                $model->image = UploadedFile::getInstance($model, 'image');
                
                if($model->validate() && $model->save()){
                    $imageName = $model->image->baseName.'.'.$model->image->extension;
                    $model->image->saveAs(\Yii::getAlias('@eventImgPath').'/'.$imageName);
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
     * Updates an existing Packages model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load($this->request->post())) {

                $model->image = UploadedFile::getInstance($model, 'image');
                
                if($model->validate() && $model->save()){
                    $imageName = $model->image->baseName.'.'.$model->image->extension;
                    $model->image->saveAs(\Yii::getAlias('@eventImgPath').'/'.$imageName);
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
     * Deletes an existing Packages model.
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
     * Finds the Packages model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Packages the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Packages::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
