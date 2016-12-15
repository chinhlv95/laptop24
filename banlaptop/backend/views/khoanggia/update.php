<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Khoanggia */

$this->title = 'Update Khoanggia: ' . $model->MaKG;
$this->params['breadcrumbs'][] = ['label' => 'Khoảng giá', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->MaKG, 'url' => ['view', 'id' => $model->MaKG]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="khoanggia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
