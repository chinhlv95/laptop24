<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Hoadon */

$this->title = $model->MaDonHang;
$this->params['breadcrumbs'][] = ['label' => 'Hóa đơn', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hoadon-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->MaDonHang], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->MaDonHang], [
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
            'MaDonHang',
            'MaKhachHang',
            'MaDiaChi',
            'NgayDatHang',
            'MaVC',
            'MaTT',
            'TrangThai',
            'TongTien',
        ],
    ]) ?>

</div>
