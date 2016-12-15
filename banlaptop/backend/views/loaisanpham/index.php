<?php

use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;
use backend\models\Loaisanpham;


/* @var $this yii\web\View */
/* @var $searchModel backend\models\ThesanphamiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Loại Sản Phẩm';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="loaisanpham-index">

    <h1><?= Html::encode($this->title) ?></h1>
 <!--  <?php  echo $this->render('_search', ['model' => $searchModel]); ?> -->

    <p>
        <?= Html::a('Thêm Mới', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php 
     $dataProvider = new ActiveDataProvider([
    'query' => Loaisanpham::find(),
    'pagination' => [
        'pageSize' => 5,
    ],
     ]);


     ?>
     <?php Pjax::begin([
    'enablePushState'=>FALSE
]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        'MaLSP',
        'Tenloaisp',

        'Mota',
        [
        'attribute' => 'Image',
        'format' => 'html',    
        'value' => function ($data) {
            return Html::img("../".$data['Image'],
             ['width' => '100px','height'=>'100px']);
        },
        ],
         [
        'attribute' => 'Trangthai',
        'format' => 'raw',    
        'value' => function ($data) {
            return ($data['Trangthai'])?'Hiện':'Ẩn';
        },
        ],

        ['class' => 'yii\grid\ActionColumn'],
        ],
        ]); ?>
        <?php Pjax::end(); ?>
    </div>
