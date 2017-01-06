<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Loaisanpham */

$this->title = 'Update Loaisanpham: ' . $model->Tenloaisp;
$this->params['breadcrumbs'][] = ['label' => 'Loại sản phẩm', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Tenloaisp, 'url' => ['view', 'id' => $model->Tenloaisp]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="loaisanpham-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
