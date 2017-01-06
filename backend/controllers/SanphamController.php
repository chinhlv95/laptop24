<?php

namespace backend\controllers;

use Yii;
use backend\models\Sanpham;
use backend\models\SanphamSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\Loaisanpham;
use yii\helpers\ArrayHelper;
use yii\web\UploadedFile;

/**
 * SanphamController implements the CRUD actions for Sanpham model.
 */
class SanphamController extends Controller
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
     * Lists all Sanpham models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SanphamSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            ]);
    }

    /**
     * Displays a single Sanpham model.
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
     * Creates a new Sanpham model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Sanpham();
        $dataloaisp=Loaisanpham::getloaisp();
        $dataloaisp=ArrayHelper::map($dataloaisp,'MaLSP','Tenloaisp');
      
        if ($model->load(Yii::$app->request->post())) {
           $urlimg= Yii::$app->request->post();
            // image
           $Img=$urlimg['Sanpham']['Image'];
            $Img=str_replace("http://localhost:8282/banlaptop/", "", $Img);
            $model->Image=$Img;
            // smallimage
            $smallImg=$urlimg['Sanpham']['smallImage'];
            $smallImg=str_replace("http://localhost:8282/banlaptop/", "", $smallImg);
            $model->smallImage=$smallImg;
            // mediumimage
              $mediumImage=$urlimg['Sanpham']['mediumImage'];
            $mediumImage=str_replace("http://localhost:8282/banlaptop/", "", $mediumImage);
            $model->mediumImage=$mediumImage;
            // 
             $largeImage=$urlimg['Sanpham']['largeImage'];
            $largeImage=str_replace("http://localhost:8282/banlaptop/", "", $largeImage);
            $model->largeImage=$largeImage;
               if($model->save());

            return $this->redirect(['view', 'id' => $model->MaSP]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'dataloaisp'=>$dataloaisp,

                ]);
        }
}

    /**
     * Updates an existing Sanpham model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $dataloaisp=Loaisanpham::getloaisp();
        $dataloaisp=ArrayHelper::map($dataloaisp,'MaLSP','Tenloaisp');
        if ($model->load(Yii::$app->request->post())) {
            $urlimg= Yii::$app->request->post();
            // image
           $Img=$urlimg['Sanpham']['Image'];
            $Img=str_replace("http://localhost:8282/banlaptop/", "", $Img);
            $model->Image=$Img;
            // smallimage
            $smallImg=$urlimg['Sanpham']['smallImage'];
            $smallImg=str_replace("http://localhost:8282/banlaptop/", "", $smallImg);
            $model->smallImage=$smallImg;
            // mediumimage
              $mediumImage=$urlimg['Sanpham']['mediumImage'];
            $mediumImage=str_replace("http://localhost:8282/banlaptop/", "", $mediumImage);
            $model->mediumImage=$mediumImage;
            // 
             $largeImage=$urlimg['Sanpham']['largeImage'];
            $largeImage=str_replace("http://localhost:8282/banlaptop/", "", $largeImage);
            $model->largeImage=$largeImage;
               if($model->save());
          



          return $this->redirect(['view', 'id' => $model->MaSP]);
      } else {
        return $this->render('update', [
            'model' => $model,
            'dataloaisp'=>$dataloaisp,
            ]);
    }
}

    /**
     * Deletes an existing Sanpham model.
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
     * Finds the Sanpham model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Sanpham the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Sanpham::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
