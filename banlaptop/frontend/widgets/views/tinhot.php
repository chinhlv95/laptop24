<div id="content-left-news"> 
  
  <?php 
    use frontend\common\BaseHelper;
   $rewrite=new BaseHelper();
   foreach ($tinhot as $key => $value) {
  
   ?>
        	<div class="sub-news">
        		<img src="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/<?php echo $value['Image']; ?>" alt="">
				<div class="right-new">
			   <a href="<?php echo $rewrite->rewriteUrl($value['Mabt'],$value['Tenbt'],'chi-tiet-ban-tin'); ?>"><?php echo $value['Tenbt']; ?></a><br/>
				<span class="glyphicon glyphicon-calendar"> <?php
            $date=date_create($value['Ngaycn']);
			 echo date_format($date,"d-m-Y"); ?></span> 
				</div>
        	</div>
   <?php } ?>
        	
			<div class="sub-news-more">
			<p><a href="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/tintuc">xem thêm</a></p>
			</div>

         
</div>