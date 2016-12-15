<?php 
use frontend\common\BaseHelper;
  $rewrite=new BaseHelper();
$this->title=$cartsp['Tensanpham'];
 ?>
<div id="nd">
					<div id="linespct">
						<a href="<?=Yii::$app->homeUrl;?>" title="">Trang chủ</a>>><?php echo $cartsp['Tensanpham']; ?>
					</div>
				 <div id="chitietsanpham">
					<div class="row">
						<div class="col-md-6">
						  <div class="anhsanpham">
						  <div class="large"></div>
							<div id="hienthi">	
						         <img id="anhsp_<?php echo $cartsp['MaSP'];  ?>" src="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/<?php echo $cartsp['Image']; ?>"  class="anh1" alt=""width="100%" data-zoom-image="img/laptop.png">
							</div>
							
							<script>
								function hienthi(text)
								{
							    
							      var x = $("#"+text).attr("src");
							       $(".anh1").attr({src:x});
							      
								
								}

							</script>

							<div id="anh" class="owl-carousel">	
						
							  <div>  <img  id="anh2" src="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/<?php echo $cartsp['smallImage']; ?>" alt="" width="150"  onclick="hienthi(this.id)"></div>
							  <div> <img  id="anh3" src="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/<?php echo $cartsp['mediumImage']; ?>" alt="" width="150"  onclick="hienthi(this.id)"></div>
							   <div> <img  id="anh4" src="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/<?php echo $cartsp['largeImage']; ?>" alt="" width="150"  onclick="hienthi(this.id)"></div>

							</div>
							
							</div>
						</div>
						<div class="col-md-6">
							<div id="chitietsp">
                                <input type="hidden" id="sale_<?php echo $cartsp['MaSP']; ?>" value="<?php echo $cartsp['chietkhau']; ?>">
								<h3 id="nameproduct_<?php echo $cartsp['MaSP']; ?>"><?php echo $cartsp['Tensanpham']; ?></h3>
								<div id="mota">
									
                                    <?php echo $cartsp['Mota']; ?>
								</div>
								<span><strong>Mã sản phẩm:</strong><?php echo "SP-".$cartsp['MaSP']; ?></span><br/>
								<span><strong>Bảo hành:</strong><?php echo $cartsp['Baohanh']?"2 (năm)":"1 (năm)"; ?></span><br/>
                                                     <?php 
                          if($cartsp['chietkhau']==0)
                          {
                            ?>
                            <span>Giá:</span><span class="gia" id="price_num_<?php echo $cartsp['MaSP']; ?>"><?php echo number_format($cartsp['giaban'])."(VNĐ)"; ?> </span>  <br/>
                          <?php
                            }
                          else
                          {
                            ?>
                              <span class="giaunline">Giá: <?php echo number_format($cartsp['giaban'])."(VNĐ)"; ?> </span>  <br/>
                              <span class="giaconlai"><strong>Còn:</strong></span><span class="giaconlai giaconlai-detail" id="price_none_<?php echo $cartsp['MaSP']; ?>">
                                 <?php echo number_format($cartsp['giaban']*(1-($cartsp['chietkhau']/100)))."(VNĐ)"; ?>
                               </span>
                            <?php 

                          }

                     ?>
								<div id="muahangct">
									<a href="javascript:void(0)" onclick="addcart(<?php echo $cartsp['MaSP']; ?>)"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Đặt mua</a>
								</div>
								
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div id="tabct">
								<ul class="tabs">
									<li class="tab-link current" data-tab="tab-3">Đặc điểm</li>
									<li class="tab-link" data-tab="tab-4">Thông số kỹ thuật</li>
									<li class="tab-link" data-tab="tab-6">Bình luận facebook</li>
								</ul>
								<div id="tab-3" class="tab-content current cttab">
								<?php echo $cartsp['dacdiem']; ?>
								</div>
								<div id="tab-4" class="tab-content cttab">
	                               <?php echo $cartsp['Thongsokythuat']; ?>

								</div>
								
								<div id="tab-6" class="tab-content cttab">
									<div class="fb-comments" data-href="" data-colorscheme="light" data-numposts="5" data-width="100%"></div>
									
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div id="sanphamlienquan">
							<div id="linesplq">
								<h4>Sản phẩm liên quan</h4>
							</div>
							<div id="chitietsplq">
								<div class="row">
									 <?php 
                      foreach ($datasplq as $key => $value) {
                       
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
				</div>
			</div>
		