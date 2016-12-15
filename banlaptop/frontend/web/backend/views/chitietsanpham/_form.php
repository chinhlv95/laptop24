<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Chitietsanpham */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chitietsanpham-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'MaSP')->dropDownlist($datasanpham,['prompt'=>'-Sản phẩm-']) ?>

    <?= $form->field($model, 'CPU')->textInput() ?>

    <?= $form->field($model, 'RAM')->textInput() ?>

    <?= $form->field($model, 'PIN')->textInput() ?>

    <?= $form->field($model, 'DISPLAY')->textInput() ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
