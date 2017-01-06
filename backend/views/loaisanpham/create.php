<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Loaisanpham */

$this->title = 'Thêm Mới Loại Sản Phẩm';
$this->params['breadcrumbs'][] = ['label' => 'Loại sản Phẩm', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loaisanpham-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
