  <div id="giohang" class="glyphicon glyphicon-shopping-cart" >
    <?php 
    if($total==0)
    {
     ?>
    
    <span id="total-zezo"><?php echo $total; ?></span>
    <?php 
          }
          else
          {
     ?>
        <span id="total-none"><?php echo $total; ?></span>

     <?php 
     }
      ?>
</div>