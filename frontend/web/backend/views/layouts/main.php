<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use backend\widgets\orderday;
AppAsset::register($this);
$Url = str_replace("/backend", "", Yii::$app->urlManager->baseUrl);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
   
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">Quản lý bán hàng</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                <li id="tb">
            <div id="thongbao"><?=orderday::widget() ?></div>
             <a href="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/hoadon?current=<?php echo date('Y-m-d'); ?>"><i class="fa fa-bell"></i></a>
                    
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php if(isset(Yii::$app->user->identity->username)){echo Yii::$app->user->identity->username; }else{echo "";} ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                       
                       <?php 
                      if (Yii::$app->user->isGuest)
                      {
                       
                      }
                      else
                       {
                        echo '<li>'
                        . Html::beginForm(['/site/logout'], 'post')
                        . Html::submitButton(
                            'Logout('.Yii::$app->user->logout().')',
                            ['class' => 'btn btn-link']
                        )
                        . Html::endForm()
                        . '</li>';
                       
                        }
                        ?>                       
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="<?= Yii::$app->homeUrl; ?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/user"><i class="fa fa-fw fa-bar-chart-o"></i>user</a>
                    </li>
                    <li>
                        <a href="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/menu"><i class="fa fa-fw fa-table"></i>Menu</a>
                    </li>
                    <li>
                       
                    </li>
                     <li>
                         <a href="javascript:;" data-toggle="collapse" data-target="#demo" ><i class="fa fa-fw fa-edit"></i>Quản Lý sản Phẩm</a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/loaisanpham">Loại sản Phẩm</a>
                            </li>
                            <li>
                                <a href="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/sanpham">Sản Phẩm</a>
                            </li>
                            <li>
                                <a href="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/thuoctinh">Thuộc tính Sản Phẩm</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/tintuc"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Tin tức</a>
                    </li>
                    <li>
                        <a href="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/lienhe"><i class="fa fa-fw fa-table"></i>Liên hệ</a>
                    </li>
                    <li>
                         <a href="javascript:;" data-toggle="collapse" data-target="#demo3" ><i class="fa fa-fw fa-edit"></i>Quản Lý Thanh Toán</a>
                        <ul id="demo3" class="collapse">
                            <li>
                                <a href="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/thanhtoan">Hình thức thanh toán</a>
                            </li>
                            <li>
                                <a href="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/vanchuyen">Hình thức vận chuyển</a>
                            </li>

                        </ul>
                    </li>
                     <li>
                        <a href="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/khoanggia"><i class="fa fa-fw fa-table"></i>Khoảng giá</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
             
        <div id="page-wrapper">

            <div class="container-fluid">
                <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
               <?= $content ?>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
       <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="width: 900px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <iframe  width="100%" height="550" frameborder="0" src="<?php echo $Url ?>/filemanager/dialog.php?type=1&field_id=imglsp">
        </iframe>
      </div>
    </div>
  </div>
</div>
    </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
