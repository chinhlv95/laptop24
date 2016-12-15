<?php

use yii\web\Session;
use frontend\common\BaseHelper;
/* @var $this yii\web\View */

$this->title = 'Trang chủ';
$this->params['breadcrumbs'][] = $this->title;
   $rewrite=new BaseHelper();
?>
<div id="nd">
        <div id="trangnhat">
            TRANG NHẤT
        </div>
        <div class="row">
        <?php 
     
          foreach ($datasanphamall as $key => $value) {
           
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

      
    <div id="spbanchay">
        <ul class="tabs">
            <li class="tab-link current" data-tab="tab-1">Sản phẩm bán chạy</li>
            <li class="tab-link" data-tab="tab-2">Sản phẩm mới nhất</li>

        </ul>

        <div id="tab-1" class="tab-content current">
            <div class="row">
                <?php 
          foreach ($sanphammuanhieu as $key => $value) {
           
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
                
        </div>
        <div id="tab-2" class="tab-content">
            <div class="row">

          <?php 
          foreach ($datamoinhatsp as $key => $value) {
           
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
        </div>
    </div>
</div>