 <section id="giohangmua">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="ghang">
                            <h3>Giỏ hàng</h3>
                            <div class="table-responsive">
                            <table class="table table-bordered">

                                <thead class="active">
                                    <th>STT</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Ảnh sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                  
                                </thead>
                                <tbody>
                              
                                     <?php 
                                      $total=0;
                                      $i=1;
                                     foreach ($cart as $key => $value) {
                                     
                                     ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><a href=""><?php echo $value['sp']; ?></a></td>
                                        <td><img src="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/<?php echo $value['anh']; ?>" alt="" width="200px" height="100px"></td>
                                        <td><?php echo number_format($value['gia']); ?></td>
                                        <td>
                                          <?php echo $value['sl']; ?>
                                        </td>
                                        <td><?php echo number_format($value['sl']*$value['gia']*(1-($value['chietkhau'])/100))."(VNĐ)"; ?></td>
                                      
                                    </tr>
                                   <?php 

                                    $total+=$value['sl']*$value['gia']*(1-($value['chietkhau'])/100);
                                   $i++; } ?>
                                    <tr>
                                        <td></td>
                                        <td colspan="3">
                                            <a href="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/gio-hang" class="giohanga">Xem giỏ hàng</a> <a href="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/thanhtoan" class="giohanga">Thanh toán</a>
                                        </td>
                                        <td align="right">Tổng Tiền:</td>
                                        <td><?php echo number_format($total)."(VNĐ)"; ?></td>
                                        
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
            </div>  
        </section>