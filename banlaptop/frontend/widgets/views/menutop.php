 <?php   
use yii\helpers\Url;
 ?>
 <nav class="navbar navbar-default" role="navigation">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="<?=Yii::$app->homeUrl;?>" data-toggle="tooltip" title="Trang chủ"><i class="fa fa-home" aria-hidden="true"></i></a>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse navbar-ex1-collapse">
                                
                                
                                <ul class="nav navbar-nav navbar-left">
                                <?php    
                                   foreach ($datamenu as $key => $value) {
 
                                ?>
                                    <li><a href="<?=Yii::$app->getUrlManager()->getBaseUrl();?><?php echo $value['URL'] ; ?>"class="hvr-overline-from-center"><?= $value['Name'] ?>

                                    </a>

                                    <?php } ?>
                                    <li><a href="#lienhe"class="hvr-overline-from-center">Liên Hệ</a>
                                   
                               
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div>
                </nav>