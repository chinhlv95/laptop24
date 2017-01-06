<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Sanpham */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sanpham-form">

    <?php $form = ActiveForm::begin(); ?>

   <?= $form->field($model, 'MaLSP')->dropDownlist($dataloaisp,['prompt'=>'-Loại sản phẩm-']) ?>

    <?= $form->field($model, 'Tensanpham')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'dacdiem')->textarea(['id'=>'dacdiem','rows' => 6]) ?>

    <?= $form->field($model, 'Mota')->textarea(['id'=>'mota','rows' => 6]) ?>

    <?= $form->field($model, 'Thongsokythuat')->textarea(['id'=>'thongso','rows' => 6]) ?>

    <?= $form->field($model, 'Trangthai')->dropDownlist(['0'=>'Ẩn','1'=>'Hiện'],['prompt'=>'-Trạng Thái-']) ?>
        <img id="anhloaisanpham1" src=""alt="">

    <?= $form->field($model, 'Image')->textInput(['id' => "image","placeholder"=>"click để chọn ảnh"]) ?>
            <img id="anhloaisanpham2" src=""alt="">

    <?= $form->field($model, 'smallImage')->textInput(['id' => "smallimage","placeholder"=>"click để chọn ảnh"]) ?>
                <img id="anhloaisanpham3" src=""alt="">

    <?= $form->field($model, 'mediumImage')->textInput(['id' => "mediumimage","placeholder"=>"click để chọn ảnh"]) ?>
    <img id="anhloaisanpham4" src=""alt="">

    <?= $form->field($model, 'largeImage')->textInput(['id' => "largeimage","placeholder"=>"click để chọn ảnh"]) ?>

    <?= $form->field($model, 'gianhap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'giaban')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'chietkhau')->textInput() ?>

    <?= $form->field($model, 'Muanhieu')->dropDownlist(['0'=>'Ẩn','1'=>'Hiện'],['prompt'=>"-Sản phẩm mua nhiều-"]) ?>

    <?= $form->field($model, 'Baohanh')->dropDownlist(['0'=>'1 Năm','1'=>'2 năm'],['prompt'=>"-Bảo hành-"]) ?>

    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
