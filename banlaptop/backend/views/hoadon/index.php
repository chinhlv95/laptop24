<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\HoadonSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

if(isset($_GET['current']))
{

$this->title = 'Hóa Đơn Ngày:'.date('d-m-y');
$this->params['breadcrumbs'][] = $this->title;
}
else
{
    $this->title = 'Hóa đơn';
$this->params['breadcrumbs'][] = $this->title;
}
?>
<div class="hoadon-index">

   
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
   
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
        

            'MaDonHang',
             [
                'attribute' => 'MaKhachHang',
                'value' => function ($model) {
                 return $model->khachhang->TenKhachHang; 
             },
             ],
            
             [
                'attribute' => 'MaDiaChi',
                'value' => function ($model) {
                 return $model->diachigiaohang->DiaChi; 
             },
             ],
             [
                'attribute' => 'NgayDatHang',
                'value' => function ($model) {
                    $date=date_create($model->NgayDatHang);
                 return date_format($date,"d-m-Y"); 

             },
             ],
            [
                'attribute' => 'MaVC',
                'value' => function ($model) {
                 return $model->vanchuyen->TenVC; 
             },
             ],
             [
                'attribute' => 'MaTT',
                'value' => function ($model) {
                 return $model->thanhtoan->TenTT; 

             },
             ],
             [
        'attribute' => 'TrangThai',
        'format' => 'raw',    
        'value' => function ($data) {
            return ($data['TrangThai'])?'khách đã nhận hàng':'Mới đặt hàng';
        },
        ],
           [
                'attribute' => 'TongTien',
                'value' => function ($model) {
                 return number_format($model->TongTien)."đ"; 

             },
             ],

            ['class' => 'yii\grid\ActionColumn',
              'contentOptions' => ['style' => 'width:260px;'],
                'header'=>'',
                'template' => '{xemchitiet}{update}',
                       
                'buttons' => [

                    //view button
                    
                    'update' => function ($url, $model) {
                     if($model->TrangThai==0)
                     {


                        return  Html::a('<span class="glyphicon glyphicon-refresh"></span> Cập nhật', $url, 
                         [ 'title' => Yii::t('app', 'update'), 'class'=>'btn btn-primary btn-xs', ]) ;
                    }
                    },
                    //
                      
                     'xemchitiet' => function ($url1, $model) {
                        $url1=Yii::$app->getUrlManager()->getBaseUrl()."/chitiethoadon?id=".$model->MaDonHang;
                        return  Html::a(' <span class="glyphicon glyphicon-paperclip"></span> Xem Chi tiết', $url1, 
                         ['class'=>'btn btn-primary btn-xs', ]) ;
                    },
                    
                ],
 
            ],
        ],
    ]); ?>
</div>
