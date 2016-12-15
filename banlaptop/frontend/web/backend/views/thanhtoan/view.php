<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Thanhtoan */

$this->title = $model->MaTT;
$this->params['breadcrumbs'][] = ['label' => 'Thanh toán', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thanhtoan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->MaTT], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->MaTT], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'MaTT',
            'TenTT',
            'Mota',
            'Trangthai',
        ],
    ]) ?>

</div>
