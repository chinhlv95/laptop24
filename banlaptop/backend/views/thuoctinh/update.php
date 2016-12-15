<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Thuoctinh */

$this->title = 'Update Thuoctinh: ' . $model->TenLTT;
$this->params['breadcrumbs'][] = ['label' => 'Thuoctinhs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->TenLTT, 'url' => ['view', 'id' => $model->MaLTT]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="thuoctinh-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
