<div id="thanhtoan" class="clean-fix">
<?php 

$this->title="Thanh toán";

 ?>
  <div class="linedonhang">
  	Thanh toán đơn hàng
  </div>
   <div class="row">
                    <div class="col-md-12">
                        <div id="ghang">
                            <h3>Giỏ hàng</h3>
                            <div class="table-responsive">
                            <table class="table table-bordered">

                                <thead class="active">
                                    <th>STT</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Ảnh sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                  
                                </thead>
                                <tbody>
                              
                                     <?php 
                                      $total=0;
                                      $i=1;
                                     foreach ($cart as $key => $value) {
                                     
                                     ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><a href=""><?php echo $value['sp']; ?></a></td>
                                        <td><img src="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/<?php echo $value['anh']; ?>" alt="" width="200px" height="100px"></td>
                                        <td><?php echo number_format($value['gia']); ?></td>
                                        <td>
                                          <?php echo $value['sl']; ?>
                                        </td>
                                        <td><?php echo number_format($value['sl']*$value['gia']*(1-($value['chietkhau'])/100))."(VNĐ)"; ?></td>
                                      
                                    </tr>
                                   <?php 

                                    $total+=$value['sl']*$value['gia']*(1-($value['chietkhau'])/100);
                                   $i++; } ?>
                                    <tr>
                                        <td></td>
                                        <td colspan="3">
                                        </td>
                                        <td align="right">Tổng Tiền:</td>
                                        <td><?php echo number_format($total)."(VNĐ)"; ?></td>
                                        
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
      </div>
      <br/s>
   <?php 
use yii\web\Session;
 $session = new Session;
 $login=$session['login'];
if(!isset($session['login']))
{
    ?>

    <div class="alert alert-info alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    <strong>Info!</strong> <a href=""data-toggle="modal" data-target="#modalthanhtoan" data-backdrop="false">nếu bạn có tài khoản tại LaptopHaNoi hãy đăng nhập tại đây</a>
 <?php } ?>
  </div>
	<div id="thanhtoanct">
		<div class="row">
			<form action="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/shopcart/checkout" role="form" method="post">
			<input type="hidden" name="_csrf" id="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
				<div class="col-md-6">
					<div id="ttkh">thông tin khách hàng</div>

					<div id="ndkh">
						<div class="form-group">
							<label for="hoten">Họ Tên Khách Hàng*</label>
							<input type="text" class="form-control" id="hoten" name="hoten" value="<?php echo isset($login)?$login['TenKhachHang']:""; ?>" placeholder="Họ Tên" required>
						</div>
						<div class="form-group">
							<label for="email">Email*</label>
							<input type="email" class="form-control" id="email" name="email" placeholder="Email"  value="<?php echo isset($login)?$login['Email']:""; ?>" required>
						</div>
						<div class="form-group">
							<label for="sdt">Số Điện Thoại*</label>
							<input type="text" class="form-control" id="sdt" name="sdt" placeholder="Số Điện Thoại" value="<?php echo isset($login)?$login['SoDienThoai']:""; ?>" required>
						</div>
						<div class="form-group">
							<label for="diachi">Địa Chỉ (số nhà, đường, tỉnh) * </label>
							<textarea class="form-control" id="diachi" name="diachi" rows="3" placeholder="Địa Chỉ"  required ><?php echo isset($login)?$login['DiaChi']:""; ?></textarea>
						</div>
					</div>
						<div id="htvc">Hình Thức vận chuyển</div>
					<div id="ndvc">
					<?php foreach ($datavanchuyen as $key => $value) {
						 ?>
						<div class="radio">
							<label>
								<input type="radio" name="vanchuyen" value="<?php echo $value['MaVC']; ?>" required><?php echo $value['TenVC']; ?>
							</label>
						</div>
						<?php } ?>

					</div>
					
						

					</div>
				
				<div class="col-md-6">
					<div id="ttkh">thông tin người nhận</div>
					<div class="checkbox">
							<label>
								<input type="checkbox" name="checked" id="checked" > Giống thông tin khách hàng
							</label>
						</div>
					<div id="nhanhang">
						<div class="form-group">
							<label for="hotenn">Họ Tên Khách Hàng*</label>
							<input type="text" class="form-control" id="hotenn" name="hotenn"  placeholder="Họ Tên" required>
						</div>
						<div class="form-group">
							<label for="emailn">Email*</label>
							<input type="email" class="form-control" id="emailn" name="emailn" placeholder="Email"   required>
						</div>
						<div class="form-group">
							<label for="sdtn">Số Điện Thoại*</label>
							<input type="text" class="form-control" id="sdtn" name="sdtn" placeholder="Số Điện Thoại"  required>
						</div>
						<div class="form-group">
							<label for="diachin">Địa Chỉ (số nhà, đường, tỉnh) * </label>
							<textarea class="form-control" id="diachin" name="diachin" rows="3" placeholder="Địa Chỉ"  required ></textarea>
						</div>
					</div>
					<div id="httt">Hình Thức Thanh toán</div>
					<div id="ndtt">
						<?php foreach ($datathanhtoan as $key => $value) {
						 ?>
						<div class="radio">
							<label>
								<input type="radio" name="thanhtoan" value="<?php echo $value['MaTT']; ?>" required><?php echo $value['TenTT']; ?>
							</label>
						</div>
						<?php } ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
					<div id="btnthanhtoan">
					
						<a href="<?= Yii::$app->homeUrl;  ?>"  class="btn btn-default">Quay lại</a>
						<button type="submit" class="btn btn-default" value="thanhtoan">Thanh toán</button>
					</div>
					</div>
				</div>

			</form>
		</div>
		

	</div>
	</div>
	<script src="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/js/jquery-1.9.1.min.js"></script>
	<script>
     $(document).ready(function(){
    $("#checked").bind('change',function(){
      if($(this).is(':checked'))
      {
        $("#hotenn").val($("#hoten").val());
        $("#emailn").val($("#email").val());
        $("#sdtn").val($("#sdt").val());
        $("#diachin").val($("#diachi").val());
      }
      else
      {
         $("#hotenn").val("");
        $("#emailn").val("");
        $("#sdtn").val("");
        $("#diachin").val("");
      }
 
    });
      });

	</script>


