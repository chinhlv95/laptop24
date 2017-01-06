<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Khoanggia */

$this->title = $model->MaKG;
$this->params['breadcrumbs'][] = ['label' => 'Khoảng giá', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="khoanggia-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Cập Nhật', ['update', 'id' => $model->MaKG], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Xóa', ['delete', 'id' => $model->MaKG], [
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
            'MaKG',
            'KGDau',
            'KGCuoi',
            'Trangthai',
        ],
    ]) ?>

</div>
