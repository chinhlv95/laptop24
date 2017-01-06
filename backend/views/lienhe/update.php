<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Lienhe */

$this->title = 'Update Lienhe: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Lienhes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lienhe-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
