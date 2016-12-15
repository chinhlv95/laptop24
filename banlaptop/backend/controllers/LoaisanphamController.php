<?php

namespace backend\controllers;

use Yii;
use backend\models\Loaisanpham;
use backend\models\LoaisanphamSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;


/**
 * LoaisanphamController implements the CRUD actions for Loaisanpham model.
 */
class LoaisanphamController extends Controller
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
     * Lists all Loaisanpham models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new LoaisanphamSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
        
    }

    /**
     * Displays a single Loaisanpham model.
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
     * Creates a new Loaisanpham model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Loaisanpham();
        if ($model->load(Yii::$app->request->post())) {
          $urlimg= Yii::$app->request->post();
            $Img=$urlimg['Loaisanpham']['Image'];

            $Img=str_replace("http://localhost:8282/banlaptop/", "", $Img);
            $model->Image=$Img;
          if($model->save())
            return $this->redirect(['view', 'id' => $model->MaLSP]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Loaisanpham model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {  
         

        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post()) ) {
            $linkimg= Yii::$app->request->post();
            $Img=$linkimg['Loaisanpham']['Image'];
			
            $Imgs=str_replace("http://localhost:8282/banlaptop/", "", $Img);
		
            $model->Image=$Imgs;
            
          if($model->save())
            return $this->redirect(['view', 'id' => $model->MaLSP]);
       
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Loaisanpham model.
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
     * Finds the Loaisanpham model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Loaisanpham the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Loaisanpham::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
