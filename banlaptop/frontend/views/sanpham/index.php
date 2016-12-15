<?php 
use yii\widgets\LinkPager;
use frontend\common\BaseHelper;
$this->title="Sản Phẩm";

 ?>
<div id="sanpham">
	 <div class="linedonhang">
  Sản phẩm
  </div>
   <div class="row">
        <?php 
                $rewrite=new BaseHelper();
          foreach ($dataproduct as $key => $value) {
           
         ?>
           <div class="col-md-4 itemproduct">
                <div class="view view-first">  
                    <img id="anhsp_<?php echo $value['MaSP']; ?>" src="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/<?php echo $value['Image']; ?>" />  
                    <div class="mask">  
                        <a href="<?php echo $rewrite->rewriteUrl($value['MaSP'],$value['Tensanpham'],'chi-tiet-san-pham'); ?>"class="info"><i class="fa fa-spinner" aria-hidden="true"></i> Xem chi tiết</a> 
                        <br/> 
                        <a href="javascript:void(0)" onclick="addcart(<?php echo $value['MaSP']; ?>)" class="info"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Mua hàng</a>  
                    </div> 
                    <div class="tensp" id="nameproduct_<?php echo $value['MaSP']; ?>"><?php echo  $value['Tensanpham'] ?></div>
                    <input type="hidden" name="" id="sale_<?php echo $value['MaSP']; ?>" value="<?php echo $value['chietkhau']; ?>">
                    <?php 
                          if($value['chietkhau']==0)
                          {
                            ?>
                            <span>Giá:</span><span class="gia" id="price_num_<?php echo $value['MaSP']; ?>"><?php echo number_format($value['giaban'])."(VNĐ)"; ?> </span>  <br/>
                          <?php
                            }
                          else
                          {
                            ?>
                              <span class="giaunline">Giá: <?php echo number_format($value['giaban'])."(VNĐ)"; ?> </span>  <br/>
                                  <span class="giaconlai">Còn:</span><span class="giaconlai" id="price_none_<?php echo $value['MaSP']; ?>">
                                 <?php echo number_format($value['giaban']*(1-($value['chietkhau']/100)))."(VNĐ)"; ?>
                               </span>
                            <?php 

                          }

                     ?>
                  
                 
                 <?php if($value['chietkhau']==0){
                      ?>

                      <?php 
                        }
                        else{
                            ?>
                           <div class="sale" id="sale_<?php echo $value['MaSP']; ?>"><?php  echo "-".$value['chietkhau']."%"; ?></div>
                            <?php
                       } ?>
                </div>  
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