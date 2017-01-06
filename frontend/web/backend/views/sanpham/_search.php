<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SanphamSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sanpham-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'MaSP') ?>

    <?= $form->field($model, 'MaLSP') ?>

    <?= $form->field($model, 'Tensanpham') ?>

    <?= $form->field($model, 'Mota') ?>

    <?= $form->field($model, 'Thongsokythuat') ?>

    <?php // echo $form->field($model, 'Trangthai') ?>

    <?php // echo $form->field($model, 'Image') ?>

    <?php // echo $form->field($model, 'smallImage') ?>

    <?php // echo $form->field($model, 'mediumImage') ?>

    <?php // echo $form->field($model, 'largeImage') ?>

    <?php // echo $form->field($model, 'gianhap') ?>

    <?php // echo $form->field($model, 'giaban') ?>

    <?php // echo $form->field($model, 'chietkhau') ?>

    <?php // echo $form->field($model, 'Muanhieu') ?>

    <?php // echo $form->field($model, 'Baohanh') ?>

    <?php // echo $form->field($model, 'dacdiem') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
