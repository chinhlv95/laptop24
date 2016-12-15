<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\HoadonSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hoadon-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'MaDonHang') ?>

    <?= $form->field($model, 'MaKhachHang') ?>

    <?= $form->field($model, 'MaDiaChi') ?>

    <?= $form->field($model, 'NgayDatHang') ?>

    <?= $form->field($model, 'MaVC') ?>

    <?php // echo $form->field($model, 'MaTT') ?>

    <?php // echo $form->field($model, 'TrangThai') ?>

    <?php // echo $form->field($model, 'TongTien') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
