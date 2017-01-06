<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\SanphamThuoctinh */

$this->title = $model->MaSP;
$this->params['breadcrumbs'][] = ['label' => 'Thuộc tính sản phẩm', 'url' => ['index?id='.$model->MaSP]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sanpham-thuoctinh-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'MaSP' => $model->MaSP, 'MaLTT' => $model->MaLTT], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'MaSP' => $model->MaSP, 'MaLTT' => $model->MaLTT], [
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
            'MaSP',
            'MaLTT',
            'size',
        ],
    ]) ?>

</div>
