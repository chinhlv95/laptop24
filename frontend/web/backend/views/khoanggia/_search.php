<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\KhoanggiaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="khoanggia-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'MaKG') ?>

    <?= $form->field($model, 'KGDau') ?>

    <?= $form->field($model, 'KGCuoi') ?>

    <?= $form->field($model, 'Trangthai') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
