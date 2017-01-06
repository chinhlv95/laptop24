<?php

use yii\helpers\Html;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel backend\models\KhoanggiaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Khoảng giá';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="khoanggia-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Thêm Mới', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

        
            'KGDau',
            'KGCuoi',
            [
        'attribute' => 'Trangthai',
        'format' => 'raw',    
        'value' => function ($data) {
            return ($data['Trangthai'])?'Hiện':'Ẩn';
        },
        ],
       
            ['class' => 'yii\grid\ActionColumn',
              'contentOptions' => ['style' => 'width:260px;'],
                'header'=>'Actions',
                'template' => '{view}{update}{render}',
                'buttons' => [

                    //view button
                    'view' => function ($url, $model) {
                        return  Html::a('<span class="fa fa-search"></span>Hiển thị', $url, 
                         ['class'=>'btn btn-primary btn-xs', ]) ;
                    },
                    'update' => function ($url, $model) {
                        return  Html::a('<span class="fa fa-search"></span>Cập nhật', $url, 
                         [ 'title' => Yii::t('app', 'update'), 'class'=>'btn btn-primary btn-xs', ]) ;
                    },
                     'render' => function ($url1, $model) {
                      $url1="http://localhost:8282/laptop/backend/web/khoanggia?id=".$model->MaKG;
                      return  Html::a('<span class="fa fa-search"></span>render', $url1, 
                    [ 'title' => Yii::t('app', 'render'), 'class'=>'btn btn-primary btn-xs', ]) ;
                    },
                ],
               

            ],
         
        ],
    ]); ?>
</div>
