<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Tintuc */

$this->title = 'Update Tintuc: ' . $model->Tenbt;
$this->params['breadcrumbs'][] = ['label' => 'Tintucs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Tenbt, 'url' => ['view', 'id' => $model->Mabt]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tintuc-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
