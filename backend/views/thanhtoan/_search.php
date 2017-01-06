<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ThanhtoanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="thanhtoan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'MaTT') ?>

    <?= $form->field($model, 'TenTT') ?>

    <?= $form->field($model, 'Mota') ?>

    <?= $form->field($model, 'Trangthai') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
