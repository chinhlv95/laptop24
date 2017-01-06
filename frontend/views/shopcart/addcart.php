<?php 
$this->title="Giỏ hàng";


 ?>
<section id="gh">

            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div id="ghang">
                            <h3>Giỏ hàng</h3>
                            <table class="table table-bordered" width="600px">

                                <thead class="active">
                                    <th>Số thứ tự</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                    <th>Xóa sản phẩm</th>
                                </thead>
                                <tbody>

                                     <?php 
                                       $tongtien=0;
                                       $i=1;
                                       foreach ($cart as $key => $value) {
                                       	
                                      ?>
                                    <tr>
                                   <input type="hidden" name="_csrf" id="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
                                        <td><?php echo $i; ?></td>
                                        <td><a href=""><?php echo $value['sp']; ?></a></td>

                                        <td><?php echo $value['gia'] ?></td>
                                        <td >
                                        <div class="soluong">
                                            <input type="number" name="sl"  id="sl_<?php echo $key; ?>" value="<?php echo $value['sl']; ?>">
                                             <a class="posgh" href="javascript:void(0)" onclick="update(<?php echo $key; ?>)" ><span class="glyphicon glyphicon-refresh"></span></a>
                                         </div>
                                        </td>
                                        <td><?php echo number_format($value['gia']*$value['sl']); ?></td>
                                       
                                        <td><a href="javascript:void(0)" onclick="delcart(<?php echo $key; ?>)">xóa</a></td>
                                    </tr>

                                     <?php 
                                      
                                       $tongtien+=$value['gia']*$value['sl'];
                                     $i++;} ?>
                                    <tr>
                                        <td>Tổng Tiền: <?php echo number_format($tongtien)."(VNĐ)"; ?></td>
                                        <td colspan="5">
                                            <a href="<?= Yii::$app->homeUrl?>" class="giohanga">Mua tiếp</a> <a href="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/shopcart/xoagiohang" class="giohanga">Xóa giỏ hàng</a>  <a href="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/thanhtoan" class="giohanga">Thanh toán</a>
                                        </td>
                                        
                                    </tr>
                                </tbody>
                            </table>
                            
                        </div>

                    </div>
                </div>
            </div>  
        </section>
          <script src="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/js/jquery-1.9.1.min.js"></script>
        <script>
       var url="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/shopcart/updatecart?id=";
       var url1="<?=Yii::$app->getUrlManager()->getBaseUrl()?>";
          function  update(id)
          {
           sl = $("#sl_"+id).val();
           window.location=url+id+"&sl="+sl;
		  }
		function delcart(id){
			   csrf=$("#_csrf").val();
				$.post(url1+'/shopcart/delcart', {"id":id,"csrf":csrf}, function(data) {
					$("#gh").load(url1+"/shopcart/addcart #gh");
				});
			}
        </script>

