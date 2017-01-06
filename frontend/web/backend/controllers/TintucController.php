<?php

namespace backend\controllers;

use Yii;
use backend\models\Tintuc;
use backend\models\TintucSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * TintucController implements the CRUD actions for Tintuc model.
 */
class TintucController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Tintuc models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TintucSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tintuc model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Tintuc model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Tintuc();
         $model->Luotxem=0;
        if ($model->load(Yii::$app->request->post())) {
             $model->Ngaycn=date('Y/m/d H:i:s');
     
       $model->Image=UploadedFile::getInstance($model,'Image');
           if( $model->Image=='')
           { 
                 $model->Image="";
                 $model->save();
           }
           else
           {
               $model->Image->saveAs('uploads/'.$model->Image->baseName.'.'.$model->Image->extension);
                $model->Image='../uploads/'.$model->Image->baseName.'.'.$model->Image->extension;
                $model->save();
           }

            return $this->redirect(['view', 'id' => $model->Mabt]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Tintuc model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
         $anh=$this->findModel($id);
        if ($model->load(Yii::$app->request->post()) ) {
         if($model->Image=UploadedFile::getInstance($model,'Image'))
          {
           $model->Image->saveAs('uploads/'.$model->Image->baseName.'.'.$model->Image->extension);
           $model->Image='../uploads/'.$model->Image->baseName.'.'.$model->Image->extension;
           }
           else
           {
               $model->Image=$anh->Image;
           }
            $model->save();
            return $this->redirect(['view', 'id' => $model->Mabt]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Tintuc model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tintuc model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Tintuc the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Tintuc::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
