<?php
use frontend\common\BaseHelper;
use yii\web\Session;
$this->title="Tin Tức";
  $rewrite=new BaseHelper();
?>

<div id="tintuc">
<div class="linedonhang">
  Tin Tức
  </div>
	<div class="row">
	<?php 
    foreach ($datatintuc as $key => $value) {
    	
	 ?>
		<div class="col-md-6">
		<div class="tintuc">
		   <input type="hidden" name="_csrf" id="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />

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
	

	<?php 
      if($message=="")
      {
 
      	?>
      	<?php

      }
      else
      {
	 ?>
       <h3>
<a href="<?php echo $rewrite->rewriteUrl(3,"limit",'tin-tuc'); ?>"><?php echo $message; ?></a></h3>
	 <?php 
       }
	  ?>



</div>

