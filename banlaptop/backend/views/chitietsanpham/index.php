<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ChitietsanphamSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Chi tiết sản phẩm';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chitietsanpham-index">

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
            [
        'attribute' => 'MaSP',
        'value' => function ($model) {
         return $model->sanpham->Tensanpham; 
     },
     ],
            'CPU',
            'RAM',
            'PIN',
            'DISPLAY',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
