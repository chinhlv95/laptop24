<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Vanchuyen */

$this->title = 'Update Vanchuyen: ' . $model->MaVC;
$this->params['breadcrumbs'][] = ['label' => 'Vận Chuyển', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->MaVC, 'url' => ['view', 'id' => $model->MaVC]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="vanchuyen-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
