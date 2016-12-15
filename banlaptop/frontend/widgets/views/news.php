	

	<div class="vticker">
	<ul>

	<?php 
		use frontend\common\BaseHelper;
       $rewrite=new BaseHelper();
         foreach ($tinhot as $key => $value) {
         
		 ?>
		 <li>
			<div class="slidebar-news">

				<img src="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/<?php echo $value['Image']; ?>" alt="">
				<div class="content-new-master">
					<a href="<?php echo $rewrite->rewriteUrl($value['Mabt'],$value['Tenbt'],'chi-tiet-ban-tin'); ?>"><?php echo $value['Tenbt']; ?></a><br/>
				<span class="glyphicon glyphicon-calendar"> <?php
                $date=date_create($value['Ngaycn']);
			    echo date_format($date,"d-m-Y"); ?></span> 
				</div>
			</div>
			</li>
			<?php } ?>

	</ul>
</div>