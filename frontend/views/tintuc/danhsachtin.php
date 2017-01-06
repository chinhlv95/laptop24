<?php
$this->title="Tin Tức";
  use frontend\common\BaseHelper;
   $rewrite=new BaseHelper();
?>
<div id="tintuc">
<div class="linedonhang">
  Tin tức
  </div>
	<div class="row">
	<?php 
    foreach ($datatintuc as $key => $value) {
    	
	 ?>
		<div class="col-md-6">
		<div class="tintucss">
		   <input type="hidden" name="_csrf" id="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />

			<img src="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/backend/uploads/<?php echo $value['Image']; ?>" alt="" >
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
	<h3><a href="javascript:void(0)" onclick="xemthem()"><?php echo $message; ?></a></h3>
	
</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script> 
<script>
 var url1="<?=Yii::$app->getUrlManager()->getBaseUrl()?>";
		function xemthem(){

			   csrf=$("#_csrf").val();
				$.post(url1+'/tintuc/danhsachtin', {"limit":2,"csrf":csrf}, function(data) {
					$("#tintuc").load(url1+"/tintuc/danhsachtin #tintuc");
                   
				});
			}
</script>
