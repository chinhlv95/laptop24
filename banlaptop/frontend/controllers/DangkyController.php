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



class DangkyController extends \yii\web\Controller
{
   
    public function actionRegester()
    {
       
    	$model = new Khachhang();
        $modeltk=new Dangnhap();
       if($model->load(Yii::$app->Request->post())&&$modeltk->load(Yii::$app->Request->post()) && $model->validate())
       {
            $request=Yii::$app->Request;
             $arraykh=$request->post('Khachhang');
    
             $ngaysinh=$arraykh['NgaySinh'];
             $date=date_create($ngaysinh);
             $ns=date_format($date,"Y-m-d");
             $model->NgaySinh=$ns;
       if($model->save(false))
       { 
         $mail=$model->Email;
         $model->sendEmail($mail);
         $id=$model->MaKhachHang;
         $modeltk->MaKhachHang=$id;
         $modeltk->NgayTaoTK=date("y-m-d");
         $modeltk->save(false);
          
        
        $message="lưu thành công";
    	 return $this->render('index',['message'=>$message]);
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
