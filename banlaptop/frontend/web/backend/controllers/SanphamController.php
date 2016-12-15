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
    
          if($model->Image=UploadedFile::getInstance($model,'Image'))
          {
           $model->Image->saveAs('uploads/'.$model->Image->baseName.'.'.$model->Image->extension);
           $model->Image='../uploads/'.$model->Image->baseName.'.'.$model->Image->extension;
       }
       else
       {
           $model->Image="";
       }


       if($model->smallImage=UploadedFile::getInstance($model,'smallImage'))
       {
           $model->smallImage->saveAs('uploads/'.$model->smallImage->baseName.'.'.$model->smallImage->extension);
           $model->smallImage='../uploads/'.$model->smallImage->baseName.'.'.$model->smallImage->extension;
       }
       else
       {
           $model->smallImage="";
       }
           //anh3
       if($model->mediumImage=UploadedFile::getInstance($model,'mediumImage'))
       {
           $model->mediumImage->saveAs('uploads/'.$model->mediumImage->baseName.'.'.$model->mediumImage->extension);
           $model->mediumImage='../uploads/'.$model->mediumImage->baseName.'.'.$model->mediumImage->extension;
       }
       else
       {
           $model->mediumImage="";
       }

           //anh4

       if($model->largeImage=UploadedFile::getInstance($model,'largeImage'))
       {
           $model->largeImage->saveAs('uploads/'.$model->largeImage->baseName.'.'.$model->largeImage->extension);
           $model->largeImage='../uploads/'.$model->largeImage->baseName.'.'.$model->largeImage->extension;
       }
       else
       {
        $model->largeImage="";
    }
    $model->save();

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
        $anh=$this->findModel($id);
        $dataloaisp=Loaisanpham::getloaisp();
        $dataloaisp=ArrayHelper::map($dataloaisp,'MaLSP','Tenloaisp');
        if ($model->load(Yii::$app->request->post())) {

         if($model->Image=UploadedFile::getInstance($model,'Image'))
          {
           $model->Image->saveAs('uploads/'.$model->Image->baseName.'.'.$model->Image->extension);
           $model->Image='../uploads/'.$model->Image->baseName.'.'.$model->Image->extension;
       }
       else
       {
           $model->Image=$anh->Image;
       }
       
       
       if($model->smallImage=UploadedFile::getInstance($model,'smallImage'))
       {
           $model->smallImage->saveAs('uploads/'.$model->smallImage->baseName.'.'.$model->smallImage->extension);
           $model->smallImage='../uploads/'.$model->smallImage->baseName.'.'.$model->smallImage->extension;
       }
       else
       {
           $model->smallImage=$anh->smallImage;
       }
           //anh3
       if($model->mediumImage=UploadedFile::getInstance($model,'mediumImage'))
       {
           $model->mediumImage->saveAs('uploads/'.$model->mediumImage->baseName.'.'.$model->mediumImage->extension);
           $model->mediumImage='../uploads/'.$model->mediumImage->baseName.'.'.$model->mediumImage->extension;
       }
       else
       {
           $model->mediumImage=$anh->mediumImage;
       }
       
           //anh4

       if($model->largeImage=UploadedFile::getInstance($model,'largeImage'))
       {
           $model->largeImage->saveAs('uploads/'.$model->largeImage->baseName.'.'.$model->largeImage->extension);
           $model->largeImage='../uploads/'.$model->largeImage->baseName.'.'.$model->largeImage->extension;
       }
       else
       {
        $model->largeImage=$anh->largeImage;
    }
    $model->save();



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
