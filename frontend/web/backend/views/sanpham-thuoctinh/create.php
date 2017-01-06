<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\SanphamThuoctinh */

$this->title = 'Thêm mới thuộc tính sản phẩm';
if(isset($_GET['id']))
{
	$id=$_GET['id'];
$this->params['breadcrumbs'][] = ['label' => 'Thuộc tính sản phẩm', 'url' => ['index?id='.$id]];
$this->params['breadcrumbs'][] = $this->title;
}
else
{
$this->params['breadcrumbs'][] = ['label' => 'Thuộc tính sản phẩm', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
}
?>
<div class="sanpham-thuoctinh-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'datasp'=>$datasp,
        'datathuoctinh'=>$datathuoctinh
    ]) ?>

</div>
