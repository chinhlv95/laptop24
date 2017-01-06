<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Thuoctinh */

$this->title = $model->TenLTT;
$this->params['breadcrumbs'][] = ['label' => 'Thuộc Tính', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thuoctinh-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Cập nhật', ['update', 'id' => $model->MaLTT], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('xóa', ['delete', 'id' => $model->MaLTT], [
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
            'MaLTT',
            'TenLTT',
            'Trangthai',
        ],
    ]) ?>

</div>
