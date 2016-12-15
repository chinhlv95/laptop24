<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Sanpham */

$this->title = $model->Tensanpham;
$this->params['breadcrumbs'][] = ['label' => 'Sản phẩm', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sanpham-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->MaSP], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->MaSP], [
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
            'MaLSP',
            'Tensanpham',
            'Mota:ntext',
            'Thongsokythuat:ntext',
            'Trangthai',
            'Image',
            'smallImage',
            'mediumImage',
            'largeImage',
            'gianhap',
            'giaban',
            'chietkhau',
            'Muanhieu',
            'Baohanh',
            'dacdiem:ntext',
        ],
    ]) ?>

</div>
