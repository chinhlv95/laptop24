<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ThuoctinhSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Thuộc tính sản phẩm';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thuoctinh-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Thêm mới', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'MaLTT',
            'TenLTT',
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
</div>
