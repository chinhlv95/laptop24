<?php

namespace frontend\controllers;
use frontend\models\Hoadon;
use frontend\models\Chitiethoadon;
use yii\web\Session;
use yii\data\Pagination;

class HistoryorderController extends \yii\web\Controller
{
    public function actionIndex()
    {    $session = new Session;
    	 if(isset($session['login']))
         {
         	
         $login=$session['login'];
         $makhach=$login['MaKhachHang'];
         $tenkhach=$login['TenKhachHang'];
      $query=Hoadon::find()->where(['MaKhachHang'=>$makhach])->orderBy(['NgayDatHang'=>SORT_DESC ]);
     $countQuery = $query->count();
    $pagination = new Pagination(['totalCount' => $countQuery]);
    $datahistory = $query->offset($pagination->offset)->limit($pagination->limit)->all();
       $datadetailorder=new Chitiethoadon();
  
        return $this->render('index',[
               'datahistory'=>$datahistory,
               'datadetailorder'=>$datadetailorder,
               'pagination'=>$pagination,
               'tenkhach'=>$tenkhach
        ]);
    }
    }
    public function actionDeleteorder()
    {
       $session = new Session;
       $datahoadon=new Hoadon();
      $datacthoadon=new Chitiethoadon();
      if(isset($_POST['id']))
      {
       $id=$_POST['id'];
       $session['madonhang']=$id;
       $datahd=$datahoadon->findOne($id)->delete();
       if($datacthoadon->deleteAll(['MaDonHang'=>$session['madonhang']]))
         {
           unset($session['madonhang']);
           return $this->render('deleteorder');
         }
         

        
       }
   
        
    
    }

}
