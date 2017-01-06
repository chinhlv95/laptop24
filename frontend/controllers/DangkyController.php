<?php

namespace frontend\controllers;
use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use frontend\models\Khachhang;
use frontend\models\Dangnhap;
use yii\db\IntegrityException;
use yii\web\Session;
use common\libs\sendmail; 
use common\libs\checkmail;



class DangkyController extends \yii\web\Controller
{

  public function actionRegester()
  {

   $model = new Khachhang();
   $modeltk=new Dangnhap();
      $checkmail=new checkmail();
   if($model->load(Yii::$app->Request->post())&&$modeltk->load(Yii::$app->Request->post()) && $model->validate())
   {
    $request=Yii::$app->Request;
    $arraykh=$request->post('Khachhang');
    $ngaysinh=$arraykh['NgaySinh'];
    $date=date_create($ngaysinh);
    $ns=date_format($date,"Y-m-d");
    $model->NgaySinh=$ns;

    $email= $arraykh['Email'];
    if(!$checkmail->exitsmail($email))
    {
      echo "<script>alert('email không hợp lệ !')</script>";
    }
    else
    {
     if($model->save(false))
     { 
       $mail=$model->Email;


       $model->sendEmail($mail);
       $id=$model->MaKhachHang;
       $modeltk->MaKhachHang=$id;
       $modeltk->NgayTaoTK=date("y-m-d");
       $modeltk->save(false);
       $sendgmail=new sendmail();
       $sendgmail->mail($mail,"đăng ký thành viên","Đăng ký thành công");
       $message="lưu thành công";
       return $this->render('index',['message'=>$message]);

     }
   }
 }
 return $this->render('regester',['model'=>$model,'modeltk'=>$modeltk]);
}
public function actionLogin()
{  $messagelogin="";
if(isset($_POST['login']))
{
 $username=$_POST['username'];
 $password=$_POST['password'];
 $datalogin=Khachhang::login($username, $password);
 $datakhachhang=Khachhang::getkhachhang($username);
 if($datalogin==1)
 {
   $session = new Session;
   $session->open();
   $session['login']=$datakhachhang;

   $messagelogin="Đăng nhập thành công";

   return $this->redirect(['./','messagelogin'=>$messagelogin]);

 }
 else
 {
   $messagelogin="lỗi đăng nhập";
   return $this->redirect(['./','messagelogin'=>$messagelogin]);

 }

}




}
public function actionLogout()
{
  $session = new Session;

  if(isset($session['login']))
  {
    unset($session['login']);
    return $this->redirect(['./']);
  }
}

}
