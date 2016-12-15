<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Thanhtoan */

$this->title = 'Update Thanhtoan: ' . $model->MaTT;
$this->params['breadcrumbs'][] = ['label' => 'Thanhtoans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->MaTT, 'url' => ['view', 'id' => $model->MaTT]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="thanhtoan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
