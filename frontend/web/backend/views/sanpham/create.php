<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Sanpham */

$this->title = 'Thêm mới sản phẩm';
$this->params['breadcrumbs'][] = ['label' => 'Sản phẩm', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sanpham-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'dataloaisp'=>$dataloaisp
    ]) ?>

</div>
