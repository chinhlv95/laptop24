<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Khoanggia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="khoanggia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'KGDau')->textInput() ?>

    <?= $form->field($model, 'KGCuoi')->textInput() ?>

       <?= $form->field($model, 'Trangthai')->dropDownlist(['0'=>'Ẩn','1'=>'Hiện'],['prompt'=>'-Trạng Thái-']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Thêm mới' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
