<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Chitietsanpham */

$this->title = 'Update Chitietsanpham: ' . $model->MaCTSP;
$this->params['breadcrumbs'][] = ['label' => 'Chi tiết sản phẩm', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->MaCTSP, 'url' => ['view', 'id' => $model->MaCTSP]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="chitietsanpham-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
         'datasanpham'=>$datasanpham
    ]) ?>

</div>
