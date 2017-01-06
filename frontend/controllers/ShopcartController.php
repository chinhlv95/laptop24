<?php

namespace frontend\controllers;
use yii;
use frontend\models\Sanpham;
use frontend\models\Thanhtoan;
use frontend\models\Vanchuyen;
use frontend\models\Chitiethoadon;
use frontend\models\Hoadon;
use frontend\models\Khachhang;
use frontend\models\Diachigiaohang;
use yii\web\Session;
use yii\base\Request;
use common\libs\sendmail;   
use common\libs\checkmail;
class ShopcartController extends \yii\web\Controller
{
     public function beforeAction($action) {
    $this->enableCsrfValidation = true;
    return parent::beforeAction($action);
}
 public function actionThanhtoanlogin()
    {  
      $messagelogin="";
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
           
            return $this->redirect(['thanhtoan','messagelogin'=>$messagelogin]);
               
           }
           else
           {
             $messagelogin="lỗi đăng nhập";
             return $this->redirect(['thanhtoan','messagelogin'=>$messagelogin]);
           
           }

       }
     }
  public function actionAddcart()
  {

         $session = new Session;
         $session->open();
         $cart=$session['cart'];
          $id=$_POST['id'];
         $cartsp=Sanpham::getcartsp($id);
         if(!isset($session['cart']))
         {
          $cart[$id]=[
          'sl'=>1,

          'masp'=>$cartsp->MaSP,
          'sp'=>$cartsp->Tensanpham,
          'gia'=>$cartsp->giaban,
          'chietkhau'=>$cartsp->chietkhau,
          'anh'=>$cartsp->Image

          ];
        }
        else
        {
          if (array_key_exists($id, $cart)) {
           $cart[$id]=[
           'sl'=>(int)$cart[$id]['sl']+1,
           'masp'=>$cartsp->MaSP,
           'sp'=>$cartsp->Tensanpham,
           'gia'=>$cartsp->giaban,
            'chietkhau'=>$cartsp->chietkhau,
           'anh'=>$cartsp->Image

           ];
         }
         else
         {
          $cart[$id]=[
          'sl'=>1,
          'masp'=>$cartsp->MaSP,
          'sp'=>$cartsp->Tensanpham,
          'gia'=>$cartsp->giaban,
           'chietkhau'=>$cartsp->chietkhau,
          'anh'=>$cartsp->Image

          ];
        }
        
      }
      $session['cart']=$cart;

      return $this->render('listcart',[
       'cart'=>$cart
       ]);
}
public function actionDelcart()
{

     $session = new Session;
      $id =$_POST['id'];
     if(isset($session["cart"])){
      $cart = $session["cart"];
      if(array_key_exists($id, $cart)){
       unset($cart[$id]);
     }
     $session["cart"] = $cart;
     return $this-> render('listcart',[
       'cart'=>$cart,
       'id'=>$id
       ]);
    }
}
public function actionUpdatecart()
{

       $session = new Session;
       if($_POST['id']&&$_POST['sl'])
       {
            $id=$_POST['id'];
       $sl=$_POST['sl'];
       if(isset($session["cart"])){
         $cart = $session["cart"];
         if($sl){
          if(array_key_exists($id, $cart)){
           $cart[$id] = [ 'masp'=>$cart[$id]["masp"],"sl"=>$sl,"sp"=>$cart[$id]["sp"],"gia"=>$cart[$id]["gia"],"chietkhau"=>$cart[$id]["chietkhau"],"anh"=>$cart[$id]["anh"]];
         }
       }else{
        unset($cart[$id]);
      }

      }}
      $session["cart"] = $cart;
      return $this->render('listcart',[
       'cart'=>$cart
       ]);


}

  public function actionListcart()
  {
        $session = new Session;
        if(isset($session["cart"]))
        {
         $cart=$session["cart"];
       }
       return $this->render('listcart',[
        'cart'=>$cart
        ]);
  }
public function actionThanhtoan()
{
  $session = new Session;
  $cart=$session['cart'];
  $datathanhtoan=Thanhtoan::getthanhtoan();
  $datavanchuyen=Vanchuyen::getvanchuyen();
  return $this->render('thanhtoan',[
   'cart'=>$cart,
   'datathanhtoan'=>$datathanhtoan,
   'datavanchuyen'=>$datavanchuyen
   ]);
}
public function actionCheckout()
{
    $modeldiachi=new Diachigiaohang();
    $modelhoadon=new Hoadon();
    $modelkhach=new Khachhang();
    $mail=new sendmail();
   
    $session = new Session;
    $login= $session['login'];
    if(!$session['cart'])
    {
     echo "<script>alert('Giỏ hàng chưa có sản phẩm')</script>";
    }
    else
    {
    $cart=$session['cart'];
     
    $content='
    <table class="table table-bordered">

      <thead class="active">
          <th>STT</th>
          <th>Tên sản phẩm</th>
          <th>Ảnh sản phẩm</th>
          <th>Giá</th>
          <th>Số lượng</th>
          <th>Thành tiền</th>
        
      </thead>
      <tbody>';

                              
                                   
              $total=0;
              $i=1;
             foreach ($cart as $key => $value) {
             
            
            $content.='<tr>
                <td>'.$i.'</td>
                <td><a href="">'. $value["sp"].'</a></td>
                <td><img src="'. Yii::$app->getUrlManager()->getBaseUrl().'/'.$value["anh"].'" alt="" width="200px" height="100px"></td>
                <td>'.number_format($value['gia']).'</td>
                <td>
                  '. $value['sl'].'
                </td>
                <td>'.number_format($value['sl']*$value['gia']*(1-($value['chietkhau'])/100))."(VNĐ)".'</td>
              
            </tr>';
     

            $total+=$value['sl']*$value['gia']*(1-($value['chietkhau'])/100);
           $i++; }

           $content.=' <tr>
                <td></td>
                <td colspan="3">
                </td>
                <td align="right">Tổng Tiền:</td>
                <td>'. number_format($total)."(VNĐ)".'</td>
                
            </tr>
        </tbody>
    </table>';
    


   

  
if(isset($_POST['thanhtoan']))
  {
 
   date_default_timezone_set('Asia/Ho_Chi_Minh');
   
        // khach mua
    $hoten=$_POST['hoten'];
    $email=$_POST['email'];
    $sdt=$_POST['sdt'];
    $diachi=$_POST['diachi'];
       // khach nhan
    $hotenn=$_POST['hotenn'];
    $emailn=$_POST['emailn'];
    $sdtn=$_POST['sdtn'];
    $diachin=$_POST['diachin'];


    $thanhtoan=$_POST['thanhtoan'];
    $vanchuyen=$_POST['vanchuyen'];
    // tongtien
    $total=0;
    foreach ($cart as $key => $value) {
     $total+=$value['gia']*(1-($value['chietkhau']/100))*$value['sl'];
    }
  
    if(isset( $login))
    {
        $modeldiachi->MaKhachHang=$login['MaKhachHang'];
        $modeldiachi->NguoiNhan=$hotenn;
        $modeldiachi->DiaChi= $diachin;
        $modeldiachi->SDT=$sdtn;
         $modeldiachi->Email=$emailn;
         if($modeldiachi->save())
         {
        $modelhoadon->MaKhachHang=$login['MaKhachHang'];
        $modelhoadon->MaDiaChi=$modeldiachi->MaDiaChi;
        $modelhoadon->NgayDatHang=date('Y-m-d H:i:s');
        $modelhoadon->MaVC=$vanchuyen;
        $modelhoadon->MaTT=$thanhtoan;
        $modelhoadon->TrangThai=0;
        $modelhoadon->TongTien= $total;

        if($modelhoadon->save(false))
        {
 
        $mahoadon= $modelhoadon->MaDonHang;
        foreach ($cart as $value1) {
          $modelcthoadon=new Chitiethoadon();
         $modelcthoadon->MaSP=$value1['masp'];
         $modelcthoadon->SoLuong=$value1['sl'];
         $modelcthoadon->MaDonHang=$mahoadon;
          $modelcthoadon->ChietKhau=$value1['chietkhau'];
          $modelcthoadon->Gia=$value1['gia'];

         $modelcthoadon->save(false);
        }
        }
      }
  $mail->mail($emailn,"Đơn Hàng",$content);

        unset($session['cart']);
       return $this->render('thanhtoantc');

    }
    else
    {
        $modelkhach->TenKhachHang=$hoten;
        $modelkhach->DiaChi= $diachi;
        $modelkhach->SoDienThoai=$sdt;
        $modelkhach->Email=$email;
         if($modelkhach->save(false))
         {
           $makhach=$modelkhach->MaKhachHang;
            $modeldiachi->MaKhachHang=$makhach;
            $modeldiachi->NguoiNhan=$hotenn;
            $modeldiachi->DiaChi= $diachin;
            $modeldiachi->SDT=$sdtn;
            $modeldiachi->Email=$emailn;
            if($modeldiachi->save(false))
            {

          $modelhoadon->MaKhachHang=$makhach;
           $modelhoadon->MaDiaChi=$modeldiachi->MaDiaChi;
           $modelhoadon->NgayDatHang=date('Y-m-d H:i:s');
          $modelhoadon->MaVC=$vanchuyen;
          $modelhoadon->MaTT=$thanhtoan;
          $modelhoadon->TrangThai=0;
          $modelhoadon->TongTien= $total;

           if($modelhoadon->save(false))
          {

          $mahoadon= $modelhoadon->MaDonHang;
          foreach ($cart as $value1) {
            $modelcthoadon=new Chitiethoadon();
           $modelcthoadon->MaSP=$value1['masp'];
           $modelcthoadon->SoLuong=$value1['sl'];
           $modelcthoadon->MaDonHang=$mahoadon;
            $modelcthoadon->ChietKhau=$value1['chietkhau'];
            $modelcthoadon->Gia=$value1['gia'];
        $modelcthoadon->save(false);
           
             
           
          }
          }
        }
         }
         $mail->mail($emailn,"Đơn Hàng",$content);
         unset($session['cart']);
       return $this->render('thanhtoantc');
    }
  }
}

}
}
