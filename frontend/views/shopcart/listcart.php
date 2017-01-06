<?php 
$this->title="Giỏ hàng";


?>
<section id="gh">

  <div class="container">
    <div class="row">
      <div class="col-md-9">
       <div class="linedonhang">
        Giỏ hàng
      </div>
      <div id="ghang">
        <h3>Giỏ hàng</h3>
        <div class="table-responsive">
          <table class="table" width="600px">

            <thead class="active">
              <th>STT</th>
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
                  <a class="posgh" href="javascript:void(0)" onclick="updatecart(<?php echo $key; ?>)" data-toggle="tooltip" title="Cập nhật" ><span class="glyphicon glyphicon-refresh"></span></a>
                </div>
              </td>
              <td><?php echo number_format($value['gia']*$value['sl']*(1-($value['chietkhau'])/100)); ?></td>

              <td><a href="javascript:void(0)" onclick="delcart(<?php echo $key; ?>)"  data-toggle="tooltip" title="Xóa"><span class="fa fa-trash"></span></a></td>
            </tr>

            <?php 

            $tongtien+=$value['gia']*$value['sl']*(1-($value['chietkhau'])/100);
            $i++;} ?>
            <tr>

              <td colspan="3">
                <a href="<?= Yii::$app->homeUrl?>" class="giohanga">Mua tiếp</a>   <a href="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/thanhtoan" class="giohanga">Thanh toán</a>
              </td>
              <td  align="right">Tổng Tiền:</td>
              <td><?php echo number_format($tongtien)."(VNĐ)"; ?></td>
              <td></td>

            </tr>
          </tbody>
        </table>
      </div>

    </div>

  </div>
</div>
</div>  
<div id="loader">
  <img src="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/img/load.gif" alt="">
</div>
</section>
<script>

 var url1="<?=Yii::$app->getUrlManager()->getBaseUrl()?>";

 function delcart(id){

  
  csrf=$("#_csrf").val();
  $.post(url1+'/shopcart/delcart', {"id":id,"csrf":csrf}, function(data) {

   $("#gh").load(url1+"/shopcart/listcart #gh");
   $("#header").load(url1+"/shopcart/listcart #header");
   $("#giohangmua").load(url1+"/shopcart/listcart #giohangmua");
   $("#loader").fadeIn(1000);

 });

}
function updatecart(id){


 csrf=$("#_csrf").val();
 sl = $("#sl_"+id).val();
 if(sl<0)
 {
  alert("số lượng phải lớn 0");
 }
 else
 {
 $.post(url1+'/shopcart/updatecart', {"id":id,"csrf":csrf,"sl":sl}, function(data) {
  $("#gh").load(url1+"/shopcart/listcart #gh");
  $("#header").load(url1+"/shopcart/listcart #header");
  $("#giohangmua").load(url1+"/shopcart/listcart #giohangmua");
  $("#loader").fadeIn(1000);
});
 }
}
</script>

