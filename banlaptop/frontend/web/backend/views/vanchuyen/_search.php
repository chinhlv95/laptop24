<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\VanchuyenSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vanchuyen-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'MaVC') ?>

    <?= $form->field($model, 'TenVC') ?>

    <?= $form->field($model, 'Mota') ?>

    <?= $form->field($model, 'Trangthai') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
