<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\widgets\menutop;
use frontend\widgets\thuonghieu;
use frontend\widgets\giohang;
use frontend\widgets\lienlac;
use frontend\widgets\loaispfooter;
use frontend\widgets\ghmain;
use frontend\widgets\tinhot;
use yii\web\Session;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
      <link rel="shortcut icon" href="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/img/favicon.ico" type="image/x-icon"/>

    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>

    <header id="header">
        <div class="dk-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div id="lsmuahng">
                           <?php 
                           $session = new Session;
                           if(isset($session['login']))
                           {
                            ?>
                            <a href="">Lịch sử mua hàng</a>
                            <?php 
                        }
                        ?>
                    </div>
                </div>
                <div class="col-md-3 col-md-offset-7">
                    <div id="dangky">
                        <?php 
                        $session = new Session;
                        if(isset($session['login']))
                        {
                            $login=$session['login'];
                            ?>
                            <a href="<?=Yii::$app->getUrlManager()->getBaseUrl()."/dangky/logout"?>"><i class="fa fa-lock" aria-hidden="true"></i>  <?php echo 'Tài khoản('.$login['TenKhachHang'].')'; ?></a>
                            <?php
                        }
                        else
                        {
                           ?>
                           <a href="" data-toggle="modal" data-target="#myModal" data-backdrop="false"><i class="fa fa-lock" aria-hidden="true"></i> Đăng nhập</a>|<a href="<?=Yii::$app->getUrlManager()->getBaseUrl()."/dang-ky-thanh-vien"?>"><i class="fa fa-sign-in" aria-hidden="true"></i> Đăng ký</a>
                           <?php } ?>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="container">
        
        <div class="row">
            <div class="container">
                <div class="row">
                 <input type="hidden" name="_csrf" id="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />

                 <div class="col-md-3 logo">
                    <a href="<?=Yii::$app->homeUrl;?>"><img src="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/img/logo.png" alt=""></a>
                </div>
                <div class="col-md-5 col-md-offset-1">
                    <div id="search">
                        <i class="fa fa-search" aria-hidden="true" onclick="search()"></i>
                        <input type="text" class="form-control" id="timkiem"  placeholder="Tìm kiếm">
                       <div id="autocomplete"></div>

                    
                    </div>
                </div>
                
                <script>
                   function search()
                   {
                    var url="<?=Yii::$app->getUrlManager()->getBaseUrl()."/search/result?s="?>"
                    tk=$("#timkiem").val();
                    window.location=url+tk;
                }
            </script>
            <div class="col-md-2 col-md-offset-1">
                <a href="" data-toggle="tooltip" id="ghangheader" class="giohangmua_open" title="Giỏ hang" class="gio">
                  <?=giohang::widget() ?>
              </a>
          </div>
      </div>
  </div>
</div>
<div class="row">
    <div class="col-md-12">
        <?=menutop::widget() ?>
    </div>
</div>
</div>

</header>
<p id="back-top">
    <a href="#top"><img src="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/img/top.png" alt=""></a>
</p>
<section id="slideshow">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="slideanh owl-theme ">
                    <div class="slide"><a href=""><img src="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/img/slide1.jpg" alt=""></a></div>
                    <div class="slide"><a href=""><img src="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/img/slide2.jpg" alt=""></a></div>
                    <div class="slide"><a href=""><img src="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/img/slide3.jpg" alt=""></a></div>
                    <div class="slide"><a href=""><img src="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/img/slide4.jpg" alt=""></a></div>
                    <div class="slide"><a href=""><img src="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/img/slide5.jpg" alt=""></a></div>

                </div>
            </div>
        </div>
    </div>
</section>
<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div id="danhmuc">
                    <div class="bg tile"><span>TIN TỨC MỚI NHẤT</span></div>
                  <?=tinhot::widget() ?>
                  
                    
                </div>
                
            </div>

            <div class="col-md-9">
             
               <?= $content ?>
           </div>
         </div>
           
           <script type="text/javascript"src="js/fixheight.js"></script>
       </section>
       <section id="dichvu">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="dv">
                        <a href="" class="hvr-pulse-grow"><i class="fa fa-refresh" aria-hidden="true"></i> ĐỔI TRẢ HÀNG TRONG VÒNG 30 NGÀY</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="dv">
                        <a href="" class="hvr-pulse-grow"><i class="fa fa-car" aria-hidden="true"></i> GIAO HÀNG TOÀN QUỐC</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="dv">
                        <a href=""class="hvr-pulse-grow"><i class="fa fa-money" aria-hidden="true"></i> THANH TOÁN KHI NHẬN HÀNG</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?=ghmain::widget() ?>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            
          <!-- Modal content-->
          <div class="modal-content">

            <form action="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/dang-nhap" method="POST" role="form">
                <legend>ĐĂNG NHẬP</legend>
                <input type="hidden" name="_csrf" id="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="username...">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="password...">
                </div>
                <button type="submit" class="btn btn-primary" name="login">Đăng Nhập</button>
                <button type="reset" class="btn btn-primary">Nhập Lại</button>
                <button  id="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
            </form>
            
        </div>
    </div>
    
</div>
<script>
 var url1="<?=Yii::$app->getUrlManager()->getBaseUrl()?>";
 function addcart(id){
     csrf=$("#_csrf").val();
     $.post(url1+'/shopcart/addcart', {"id":id,"csrf":csrf}, function(data) {
       $("#header").load(url1+" #header");
       $("#giohangmua").load(url1+" #giohangmua");
       $("#ghmain").load(url1+" #ghmain");
       
   });
 }
</script>
<script>
  var url1='<?php echo Yii::$app->getUrlManager()->getBaseUrl()?>/';
var xmlhttp = new XMLHttpRequest();
var url =url1+"search/auto";
xmlhttp.onreadystatechange=function() {
    if (this.readyState == 4 && this.status == 200) {
        myFunction(this.responseText);
    }
}
xmlhttp.open("GET", url, true);
xmlhttp.send();
function myFunction(response) {
    var arr = JSON.parse(response);
    var arrays=new Array();
    for (var i = 0; i < arr.length; i++) {
      arrays.push(arr[i].Tensanpham);
    }
   $( "#timkiem" ).autocomplete({
    source: arrays
});

}
</script>



  </div>
<footer id="footer">
    <div id="lienhe" >
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                   <?=lienlac::widget() ?>
               </div>
               <div class="col-md-3">
                <div id="sanphafooter">
                    <h4>Sản phẩm</h4>
                    <?=loaispfooter::widget() ?>
                </div>
            </div>
            <div class="col-md-3">
                <div id="videogt">
                    <h4>Video sản phẩm</h4>
                    <iframe  src="https://www.youtube.com/embed/M7ttQx2VNIs" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-3">
                <div id="facebook">
                    <h4>Facebook</h4>
                    <iframe src="http://www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/shoplaptopgiare.vn/?fref=ts&amp;width=245&amp;colorscheme=light&amp;show_faces=true&amp;connections=9&amp;stream=false&amp;header=false&amp;height=270" scrolling="no" frameborder="0" scrolling="no" style="border: medium none; overflow: hidden; height:300px; width: 245px;background:#fff;"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="coppyright">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <address>
                    ® Bản quyền thuộc về <a href="https://www.facebook.com/profile.php?id=100005095362877">Kiên Trần</a>
                </address>
            </div>
        </div>
    </div>
</div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
