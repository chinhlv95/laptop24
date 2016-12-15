<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Vanchuyen */

$this->title = $model->MaVC;
$this->params['breadcrumbs'][] = ['label' => 'Vận chuyển', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vanchuyen-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->MaVC], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->MaVC], [
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
            'MaVC',
            'TenVC',
            'Mota',
            'Trangthai',
        ],
    ]) ?>

</div>
