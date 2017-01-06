<div id="cttintuc">
  <?php 
  use frontend\common\BaseHelper;
   $rewrite=new BaseHelper();
  $this->title=$chitiet['Tenbt'];
	?>
    <div class="linedonhang">
  Tin tức
  </div>
	<h3><?php echo $chitiet['Tenbt']; ?></h3>
	<span class="glyphicon glyphicon-calendar"> <?php
		$date=date_create($chitiet['Ngaycn']);
		echo date_format($date,"d-m-Y"); ?></span> <span class=""><i class="fa fa-eye" aria-hidden="true"></i>:<?php echo $chitiet['Luotxem']; ?>
	</span>
	<div id="contentchitiet">
		<?php echo $chitiet['Noidung']; ?>
	</div>
	
	<div class="fb-comments" data-href="" data-colorscheme="light" data-numposts="5" data-width="100%"></div>


	<div class="row">
		<div class="col-md-12">
			<div id="sanphamlienquan">
				<div id="linesplq">
					<h4>TIN TỨC KHÁC</h4>
				</div>
				<div id="chitiettintuc">
                     <div class="row">
						<?php 
					    foreach ($tinkhac as $key => $value) {
					    	
						 ?>
							<div class="col-md-6">
							<div class="tintucss">
								<img src="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/<?php echo $value['Image']; ?>" alt="" >
								<div class="contenttintuc">
								<a href="<?php echo $rewrite->rewriteUrl($value['Mabt'],$value['Tenbt'],'chi-tiet-ban-tin'); ?>"><?php echo $value['Tenbt']; ?></a><br/>
								<span class="glyphicon glyphicon-calendar"> <?php
					            $date=date_create($value['Ngaycn']);
								 echo date_format($date,"d-m-Y"); ?></span> <span class=""><i class="fa fa-eye" aria-hidden="true"></i>:<?php echo $value['Luotxem']; ?></span>
							
								</div>
							</div>
							</div>
							<?php } ?>
						</div>

				</div>  
			</div>
		</div>




	</div>
</div>
