<?php

namespace backend\controllers;

use Yii;
use backend\models\SanphamThuoctinh;
use backend\models\SanphamThuoctinhSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\Thuoctinh;
use backend\models\Sanpham;
use yii\helpers\ArrayHelper;

/**
 * SanphamThuoctinhController implements the CRUD actions for SanphamThuoctinh model.
 */
class SanphamThuoctinhController extends Controller
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
     * Lists all SanphamThuoctinh models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SanphamThuoctinhSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SanphamThuoctinh model.
     * @param integer $MaSP
     * @param integer $MaLTT
     * @return mixed
     */
    public function actionView($MaSP, $MaLTT)
    {
        return $this->render('view', [
            'model' => $this->findModel($MaSP, $MaLTT),
        ]);
    }

    /**
     * Creates a new SanphamThuoctinh model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id)
    {
        $model = new SanphamThuoctinh();
        $datasp=Sanpham::getsanpham($id);
        $datasp=ArrayHelper::map($datasp,'MaSP','Tensanpham');
         $datathuoctinh=Thuoctinh::getthuoctinh($id);
        $datathuoctinh=ArrayHelper::map($datathuoctinh,'MaLTT','TenLTT');
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'MaSP' => $model->MaSP, 'MaLTT' => $model->MaLTT]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'datasp'=>$datasp,
                'datathuoctinh'=>$datathuoctinh
            ]);
        }
    }

    /**
     * Updates an existing SanphamThuoctinh model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $MaSP
     * @param integer $MaLTT
     * @return mixed
     */
    public function actionUpdate($MaSP, $MaLTT)
    {
         $model = new SanphamThuoctinh();
        $model = $this->findModel($MaSP, $MaLTT);
        

        $datasp=Sanpham::getsanpham($MaSP);
        $datasp=ArrayHelper::map($datasp,'MaSP','Tensanpham');
        $datathuoctinh=Thuoctinh::getthuoctinhup($MaLTT);
        $datathuoctinh=ArrayHelper::map($datathuoctinh,'MaLTT','TenLTT');
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'MaSP' => $model->MaSP, 'MaLTT' => $model->MaLTT]);
        } else {
            return $this->render('_form', [
                'model' => $model,
                'datasp'=>$datasp,
                'datathuoctinh'=>$datathuoctinh
            ]);
        }
    }

    /**
     * Deletes an existing SanphamThuoctinh model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $MaSP
     * @param integer $MaLTT
     * @return mixed
     */
    public function actionDelete($MaSP, $MaLTT)
    {
        $this->findModel($MaSP, $MaLTT)->delete();

        return $this->redirect(['index?id='.$MaSP]);
    }

    /**
     * Finds the SanphamThuoctinh model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $MaSP
     * @param integer $MaLTT
     * @return SanphamThuoctinh the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($MaSP, $MaLTT)
    {
        if (($model = SanphamThuoctinh::findOne(['MaSP' => $MaSP, 'MaLTT' => $MaLTT])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
