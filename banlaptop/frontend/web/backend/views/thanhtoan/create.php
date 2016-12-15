<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Thanhtoan */

$this->title = 'Thêm Mới Thanh Toán';
$this->params['breadcrumbs'][] = ['label' => 'Thanh toán', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thanhtoan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
