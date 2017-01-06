<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SanphamThuoctinh */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sanpham-thuoctinh-form">
<?php 
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	?>
	<a href="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/sanpham-thuoctinh/create?id=<?php echo $id; ?>" class="btn btn-success">Thêm tiếp</a>
<?php
}
 ?>
<a href="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/sanpham" class="btn btn-success">Về trang sản phẩm</a>
    <?php $form = ActiveForm::begin(); ?>
   <?= $form->field($model, 'MaSP')->dropDownlist($datasp) ?>

    <?= $form->field($model, 'MaLTT')->dropDownlist($datathuoctinh,['prompt'=>'-Thuộc tính sản phẩm-']) ?>

    <?= $form->field($model, 'size')->textInput() ?>
      <?= $form->field($model, 'Tengoi')->textInput() ?>

    <div class="form-group">
 
    	    <?= Html::submitButton($model->isNewRecord ? 'Thêm mới' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

    </div>

    <?php ActiveForm::end(); ?>


</div>
