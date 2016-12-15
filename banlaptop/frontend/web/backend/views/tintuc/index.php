<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;
use backend\models\Tintuc;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TintucSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tin tức';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tintuc-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Thêm Mới', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php 
     $dataProvider = new ActiveDataProvider([
    'query' => Tintuc::find(),
    'pagination' => [
        'pageSize' => 5,
    ],
     ]);


     ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Mabt',
            'Tenbt',
           
            
            'Ngaycn',

            [
            'attribute' => 'Image',
            'format' => 'html',    
            'value' => function ($data) {
                return Html::img( 'web/'.$data['Image'],
                 ['width' => '100px','height'=>'100px']);
            },
            ],
            'Luotxem',
              [
                'attribute' => 'Trangthai',
                'format' => 'raw',    
                'value' => function ($data) {
                    return ($data['Trangthai'])?'Hiên':'Ẩn';
                },
                ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
