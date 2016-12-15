<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Sanpham */

$this->title = 'Update Sanpham: ' . $model->Tensanpham;
$this->params['breadcrumbs'][] = ['label' => 'sản phẩm', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Tensanpham, 'url' => ['view', 'id' => $model->Tensanpham]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sanpham-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'dataloaisp'=>$dataloaisp
    ]) ?>

</div>
