<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Vanchuyen */

$this->title = 'Create Vanchuyen';
$this->params['breadcrumbs'][] = ['label' => 'Vanchuyens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vanchuyen-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
