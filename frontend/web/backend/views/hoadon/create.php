<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Hoadon */

$this->title = 'Create Hoadon';
$this->params['breadcrumbs'][] = ['label' => 'Hoadons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hoadon-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
