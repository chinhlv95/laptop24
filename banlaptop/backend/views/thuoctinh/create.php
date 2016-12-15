<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Thuoctinh */

$this->title = 'Thêm mới thuộc tính sản phẩm';
$this->params['breadcrumbs'][] = ['label' => 'Thuộc tính', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thuoctinh-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
