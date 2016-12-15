<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SanphamThuoctinhSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Thuộc tính sản phẩm';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sanpham-thuoctinh-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
       <?php 

         if(isset($_GET['id']))
         {
            $id=$_GET['id'];
        ?>
        <?= Html::a('Thêm mới', ['create','id'=>$id], ['class' => 'btn btn-success']) ?>
        <?php }
         else
         {
         ?>
         <?= Html::a('Thêm mới', ['create'], ['class' => 'btn btn-success']) ?>
         <?php } ?>
         <a href="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/sanpham" class="btn btn-success">Về trang sản phẩm</a>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

             [
                'attribute' => 'MaSP',
                'value' => function ($model) {
                 return $model->sanpham->Tensanpham; 
             },
             ],
               [
                'attribute' => 'MaLTT',
                'value' => function ($model) {
                 return $model->thuoctinh->TenLTT; 
             },
             ],
         
            'size',
            'Tengoi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
