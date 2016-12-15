<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ChitietsanphamSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chitietsanpham-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'MaCTSP') ?>

    <?= $form->field($model, 'MaSP') ?>

    <?= $form->field($model, 'Image') ?>

    <?= $form->field($model, 'CPU') ?>

    <?= $form->field($model, 'RAM') ?>

    <?php // echo $form->field($model, 'PIN') ?>

    <?php // echo $form->field($model, 'DISPLAY') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
