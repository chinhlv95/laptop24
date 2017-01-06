<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Khoanggia */

$this->title = 'Thêm mới';
$this->params['breadcrumbs'][] = ['label' => 'Khoảng giá', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="khoanggia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
