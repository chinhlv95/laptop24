<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SanphamThuoctinh */

$this->title = 'Update Sanpham Thuoctinh: ' . $model->MaSP;
$this->params['breadcrumbs'][] = ['label' => 'sản phẩm thuộc tính', 'url' => ['index?id='.$model->MaSP]];
$this->params['breadcrumbs'][] = ['label' => $model->MaSP, 'url' => ['view', 'MaSP' => $model->MaSP, 'MaLTT' => $model->MaLTT]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sanpham-thuoctinh-update">
 
 <?php 
 
  ?>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'datasp'=>$datasp,
        'datathuoctinh'=>$datathuoctinh
    ]) ?>

</div>
