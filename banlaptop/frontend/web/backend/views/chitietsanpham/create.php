<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Chitietsanpham */

$this->title = 'Chi tiết sản phẩm';
$this->params['breadcrumbs'][] = ['label' => 'Chi tiết sản phẩm', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chitietsanpham-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
          'datasanpham'=>$datasanpham
    ]) ?>

</div>
