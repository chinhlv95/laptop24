<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ThesanphamiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="loaisanpham-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'MaLSP') ?>

    <?= $form->field($model, 'Tenloaisp') ?>

    <?= $form->field($model, 'Trangthai') ?>

    <?= $form->field($model, 'Mota') ?>

    <?= $form->field($model, 'Image') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
