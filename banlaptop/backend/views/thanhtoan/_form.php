<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Thanhtoan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="thanhtoan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TenTT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Mota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Trangthai')->dropDownlist(['0'=>'Ẩn','1'=>'Hiện'],['prompt'=>'-Trạng Thái-']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
