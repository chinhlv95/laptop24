<?php 
use frontend\common\BaseHelper;
   $rewrite=new BaseHelper();
 ?>
 <nav id="menuspfooter">
    <ul>
    <?php foreach ($dataloaisp as $key => $value) {
    	
     ?>
        <li><a href="<?php echo $rewrite->rewriteUrl($value['MaLSP'],$value['Tenloaisp'],'filter'); ?>" class="hvr-underline-from-left"><?php echo $value['Tenloaisp']; ?></a></li>
      <?php } ?>
    </ul>
</nav>