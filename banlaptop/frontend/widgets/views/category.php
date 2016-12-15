
<div class="catogory owl-theme ">
                   <?php 
                    use frontend\common\BaseHelper;
   $rewrite=new BaseHelper();
                       foreach ($dataloaisp as $key => $value) {
                     
                       
                    ?>
          <div class="slide-cat"><a href="<?php echo $rewrite->rewriteUrl($value['MaLSP'],$value['Tenloaisp'],'filter');?>" data-toggle="tooltip"  title="<?php echo $value['Tenloaisp']; ?>"><img src="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/<?php echo $value['Image']; ?>" alt=""></a></div>
          

          <?php } ?>

        </div>