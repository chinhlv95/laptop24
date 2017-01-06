<?php 

 ?>
<h4 class="dmtitle">Khoảng Giá</h4>
                    <nav class="subdanhmuc">
                        <ul>
                        <?php 
                        foreach ($datakhoanggia as $key => $value) {
                         ?>
                          <li><a href="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/filter?first=<?php echo $value['KGDau']."000000"?>&last=<?php echo $value['KGCuoi']."000000" ?>" class="hvr-underline-from-left"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $value['KGDau']." (triệu)-".$value['KGCuoi']." (triệu)"; ?></a></li>                            
                          <?php } ?>
                        </ul>
                    </nav>
                    <?php 
                      foreach ($datathuoctinh as $key => $value) {
                     ?>
                    <h4 class="dmtitle"><?php echo $value['TenLTT']; ?></h4>
                    <nav class="subdanhmuc">
                        <ul>
                        <?php 
                              $datattsp=$datasptt->getttsp($value['MaLTT']);
                            foreach ( $datattsp as $key => $value1) {

                            ?>
                            <li><a href="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/filter?thuoctinh=<?php echo $value1['MaLTT'];?>&size=<?php echo $value1['size']; ?>" class="hvr-underline-from-left"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $value1['Tengoi']; ?></a></li>
                            <?php } ?>
                           
                        </ul>
                    </nav>
                    <?php } ?>
                   