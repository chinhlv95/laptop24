
<?php 
$this->title = 'Chi tiết  hóa đơn';
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="chitiethoadon">
	<div class="row">
		<div class="col-md-12">
			 <div class="table-responsive">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>STT</th>
        <th>Sản phẩm</th>
        <th>ảnh</th>
        <th>Giá</th>
        <th>Chiêt khấu</th>
        <th>Thành tiền</th>
      </tr>
    </thead>
    <tbody>
    <?php 
    $total=0;
    $i=1;
     foreach ($datachitiethd as $key => $value) {
    
     ?>
      <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $value['Tensanpham']; ?></td>
        <td><img src="<?=Yii::$app->getUrlManager()->getBaseUrl()."../../".$value['Image'];?>" width="100px" height="100px" alt=""></td>
        <td><?php echo $value['giaban']; ?></td>
        <td><?php echo $value['ChietKhau']."%"; ?></td>
        <td><?php echo number_format($value['SoLuong']*$value['giaban']*(1-($value['ChietKhau'])/100))."(VNĐ)"; ?></td>
      </tr>
      <?php
       $total+=$value['SoLuong']*$value['giaban']*(1-($value['ChietKhau'])/100);
      $i++; } ?>
      <tr>
      <td colspan="5" align="right">Tổng tiền</td>
      	<td><?php echo number_format($total)."(VNĐ)"; ?></td>
      </tr>
    </tbody>
  </table>
  </div>
		</div>
	</div>
</div>
