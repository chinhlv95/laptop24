<?php
use yii\widgets\LinkPager;
$this->title="Lịch sửa khách hàng";
?>
<div id="history-order">
  <div class="linedonhang">
   <?php echo "lịch sử mua hàng của khách hàng:<strong>".$tenkhach."</strong>"; ?>
 </div>
 <div id="history-order-content">
   <?php 
   foreach ($datahistory as $key => $value) {
    ?>
    <p class="date-order"><strong>Ngày đặt hàng:</strong><?php  $date=date_create($value['NgayDatHang']);
      echo date_format($date,"d-m-Y"); ?> </p>
      <div class="table-responsive">
        <table class="table table-bordered">

          <thead class="active">
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Ảnh sản phẩm</th>
            <th>Số lượng</th>
            <th>Giảm giá</th>
            <th>Giá</th>
            <th>Thành tiền</th>

          </thead>
          <tbody>
            <?php 

            $detailorder=$datadetailorder->getdetailorder($value['MaDonHang']);
            $i=1;
            foreach ($detailorder as $key => $value1) {

             ?>

             <tr>
            
             <input type="hidden" name="_csrf" id="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" >
               <td><?php echo $i; ?></td>
               <td><a href=""><?php echo $value1['Tensanpham']; ?></a></td>
               <td><img src="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/<?php echo $value1['Image']; ?>" alt="" width="200px" height="100px"></td>
               <td><?php echo $value1['SoLuong']; ?></td>
               <td><?php echo $value1['chietkhau']."<span class='sale_his'>%</span>"; ?></td>
               <td><?php echo number_format($value1['giaban'])."<span class='unline-price'> đ</span>"; ?></td>
               <td><?php echo number_format($value1['SoLuong']*$value1['giaban']*(1-($value1['chietkhau'])/100))."(VNĐ)"; ?></td>                    
             </tr>
             <?php 
             $i++;
           } ?>
           <tr>

             <td> <?php 
               if($value["TrangThai"]==0)
               {

                 ?>
                 <a href="javascript:void(0)" onclick="deleteorder('<?php echo $value['MaDonHang'] ?>')">xóa đơn hàng</a>
                 <?php

               }

               ?></td>

               <td colspan="5" align="right"><strong>Tổng Tiền:</strong></td>
               <td><?php echo number_format($value['TongTien'])."<span class='unline-price'> đ</span>"; ?></td> 
             </tr>
           </tbody>
         </table>
       </div>
       <?php } ?>
     </div>
     <div class="row">
      <div class="col-md-4 col-md-offset-4">
       <?php echo LinkPager::widget([
        'pagination' => $pagination]); 
        ?>
      </div>
    </div>
    

  </div>
  <script>
    var url1="<?=Yii::$app->getUrlManager()->getBaseUrl()?>";
   function deleteorder(id)
   {
      csrf=$("#_csrf").val();
        $.post(url1+'/historyorder/deleteorder', {"id":id,"csrf":csrf}, function(data) {
          $("#history-order-content").load(url1+"/historyorder/deleteorder #history-order-content");
         
        });
   }
  </script>

