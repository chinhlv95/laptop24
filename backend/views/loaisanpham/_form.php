<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Loaisanpham */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="loaisanpham-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'Tenloaisp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Mota')->textInput(['maxlength' => true]) ?>
    
    <img id="anhloaisanpham" src=""alt="">
       <?= $form->field($model, 'Image')->textInput(['id' => "imglsp","placeholder"=>"click để chọn ảnh"]) ?>
     <?= $form->field($model, 'Trangthai')->dropDownlist(['0'=>'Ẩn','1'=>'Hiện'],['prompt'=>'-Trạng Thái-']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    

</div>
