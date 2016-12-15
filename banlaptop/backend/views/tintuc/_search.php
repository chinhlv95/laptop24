<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TintucSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tintuc-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Mabt') ?>

    <?= $form->field($model, 'Tenbt') ?>

    <?= $form->field($model, 'Tomtat') ?>

    <?= $form->field($model, 'Noidung') ?>

    <?= $form->field($model, 'Ngaycn') ?>

    <?php // echo $form->field($model, 'Image') ?>

    <?php // echo $form->field($model, 'Luotxem') ?>

    <?php // echo $form->field($model, 'Trangthai') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
