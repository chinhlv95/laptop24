<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Hoadon */

$this->title = 'Update Hoadon: ' . $model->MaDonHang;
$this->params['breadcrumbs'][] = ['label' => 'Hóa đơn', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->MaDonHang, 'url' => ['view', 'id' => $model->MaDonHang]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hoadon-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
