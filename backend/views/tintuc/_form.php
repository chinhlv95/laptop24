<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Tintuc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tintuc-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'Tenbt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tomtat')->textarea(['id'=>'tomtatnd','rows' => 6]) ?>

    <?= $form->field($model, 'Noidung')->textarea(['id'=>'noidung','rows' => 6]) ?>
       <img src="" id="imgviewnews" alt="">

       <?= $form->field($model, 'Image')->textInput(['id' => "ImgNews","placeholder"=>"click để chọn ảnh"]) ?>

    <?= $form->field($model, 'Trangthai')->dropDownlist(['0'=>'Ẩn','1'=>'Hiện'],['prompt'=>'-Trạng Thái-'])?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Thê Mới' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
