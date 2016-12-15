<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;
$this->title="Đăng Ký Thành Viên";
?>

<div class="linedonhang">
  Đăng ký thành viên
  </div>
<div id="dangky">
    <div class="row regester">
    <div id="regester-contetn">
        <div class="col-lg-7 col-lg-offset-2">
           <h3>Đăng ký thành viên</h3>
       
            <?php $form = ActiveForm::begin(['id' => 'contact-form','method' => 'post','class'=>'form-horizontal']); ?>
              <div id="tttk">Thông tin tài khoản</div>
                <?= $form->field($model, 'Email')->textInput(['autofocus' => true]) ?>
                <?= $form->field($modeltk, 'password')->passwordInput() ?>
                 <div id="ttcn">Thông tin cá nhân</div>
                <?= $form->field($model, 'TenKhachHang')->textInput(['autofocus' => true]) ?>
                <?= $form->field($model, 'SoDienThoai')->textInput(['autofocus' => true])  ?>
                <?= $form->field($model, 'GioiTinh')->dropDownlist(['0'=>'Nữ','1'=>'Nam'],['prompt'=>'-Giới Tính-']) ?>
                <?= $form->field($model, 'NgaySinh')->textInput(['id'=>'ngaysinh','autofocus' => true]) ?>
                <?= $form->field($model, 'DiaChi')->textInput(['autofocus' => true]) ?>
                <?= $form->field($model, 'captcha')->widget(Captcha::className(), [
                'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>
                <div class="form-group">
                    <?= Html::submitButton('Đăng Ký', ['class' => 'btn btn-primary', 'name' => 'regester']) ?>
                   <?= Html::resetButton('Nhập Lại', ['class' => 'btn btn-primary', 'name' => 'reset']) ?>
                   </div>
                
            <?php ActiveForm::end(); ?>
        </div>
   
        </div>
    </div>
</div>