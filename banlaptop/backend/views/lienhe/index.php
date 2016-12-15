<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\LienheSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Liên Hệ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lienhe-index">

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

            'ID',
            'Name',
            'Address',
            'Phone',
            'Email:email',
            // 'Detail',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
