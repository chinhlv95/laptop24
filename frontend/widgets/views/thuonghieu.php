 <nav class="subdanhmuc">
<ul>
<?php 
use frontend\common\BaseHelper;
   $rewrite=new BaseHelper();
foreach ($datathuonghieu as $key => $value) {
  ?>
    <li><a href="<?php echo $rewrite->rewriteUrl($value['MaLSP'],$value['Tenloaisp'],'filter'); ?>" class="hvr-underline-from-left"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $value['Tenloaisp']."(".$value['tong'].")"; ?></a></li>
   <?php } ?>
</ul>
</nav>