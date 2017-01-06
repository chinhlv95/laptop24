<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;
use backend\models\Sanpham; 
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\SanphamSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sản phẩm';
$this->params['breadcrumbs'][] = $this->title;
?>
 <?php 
     $dataProvider = new ActiveDataProvider([
    'query' => Sanpham::find(),
    'pagination' => [
        'pageSize' => 10,
    ],
     ]);

     ?>
<div class="sanpham-index">

    <h1><?= Html::encode($this->title) ?></h1>
<!--     <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
 -->
    <p>
        <?= Html::a('Thêm mới', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
       <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
             [
        'attribute' => 'MaSP',
        'value' => function ($model) {
         return $model->MaSP; 
     },
     ],

           [
        'attribute' => 'MaLSP',
        'value' => function ($model) {
         return $model->loaisanpham->Tenloaisp; 
     },
     ],

            'Tensanpham',
            // 'Mota:ntext',
            // 'Thongsokythuat:ntext',
        
               [
     'attribute' => 'Image',
     'format' => 'html',    
     'value' => function ($data) {
        return Html::img("../".$data['Image'],
            ['width' => '100px','height'=>'100px'],['alt'=>$data['Image']]);
    },
    ],

    [
    'attribute' => 'smallImage',
    'format' => 'html',    
    'value' => function ($data) {
        return Html::img("../".$data['smallImage'],
           ['width' => '100px','height'=>'100px']);
    },
    ],

    [
    'attribute' => 'mediumImage',
    'format' => 'html',    
    'value' => function ($data) {
        return Html::img("../".$data['mediumImage'],
           ['width' => '100px','height'=>'100px']);
    },
    ],

    [
    'attribute' => 'largeImage',
    'format' => 'html',    
    'value' => function ($data) {
        return Html::img("../".$data['largeImage'],
           ['width' => '100px','height'=>'100px']);
    },
    ],
     [
        'attribute' => 'Trangthai',
        'format' => 'raw',    
        'value' => function ($data) {
            return ($data['Trangthai'])?'Hiên':'Ẩn';
        },
        ],
            
             
            'giaban',
            'chietkhau',
            // 'Muanhieu',
          [
        'attribute' => 'Baohanh',
        'format' => 'raw',    
        'value' => function ($data) {
            return ($data['Baohanh'])?'2 năm':'1 năm';
        },
        ],
            // 'dacdiem:ntext',

            ['class' => 'yii\grid\ActionColumn',
              'contentOptions' => ['style' => 'width:260px;'],
                'header'=>'',
                'template' => '{view}{update}{delete}{add}',
                       
                'buttons' => [

                    //view button
                    
                    'view' => function ($url, $model) {
                       
                        return  Html::a('<span class="fa fa-eye"></span>', $url, 
                         [ 'title' => Yii::t('app', 'view'), 'class'=>'btn btn-primary btn-xs', ]) ;
                    },
                    'update' => function ($url, $model) {
                       
                        return  Html::a('<span class="fa fa-pencil"></span>', $url, 
                         [ 'title' => Yii::t('app', 'update'), 'class'=>'btn btn-primary btn-xs', ]) ;
                    },
                    'delete' => function ($url, $model) {
                       
                        return  Html::a('<span class="fa fa-trash"></span> ', $url, 
                         [ 'title' => Yii::t('app', 'delete'), 'class'=>'btn btn-primary btn-xs', ]) ;
                    },
                    //
                      
                     'add' => function ($url1, $model) {
                        $url1=Yii::$app->getUrlManager()->getBaseUrl()."/sanpham-thuoctinh/create?id=".$model->MaSP;
                        return  Html::a(' <span class="fa fa-plus-circle"></span> Thuộc tính', $url1, 
                         ['class'=>'btn btn-primary btn-xs', ]) ;
                    },
                    
                ],
 
            ],
        ],
    ]); ?>

</div>
