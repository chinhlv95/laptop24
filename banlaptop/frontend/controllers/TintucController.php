<?php

namespace frontend\controllers;
use frontend\models\Tintuc;
use yii\web\Session;
class TintucController extends \yii\web\Controller
{
    public function actionIndex()
    {    
         $sesion=new Session;
         $sesion->open();
    	   $id1=0;
        $unlimit=1;
        $message="";
    	if(!isset($_GET['id']))
    	{
           $id1=3;
          $sesion['value']=$id1;
    	}
    	else
    	{
    		$limit=$_GET['id'];
    		$id1=$sesion['value']+$limit;
    		$sesion['value']=$id1;
    	}
        $countt=Tintuc::counttintuc();
           if($id1<$countt)
           {
           	$message="Xem Thêm";
           }
           else
           {
           		$message="";
           }
       $datatintuc=Tintuc::getall($id1);
        return $this->render('index',[
            'datatintuc'=>$datatintuc,
            'unlimit'=>$unlimit,
            'message'=>$message
          ]);
    }
    public function actionChitiet($id)
    {
      $this->layout="mainchitiettintuc";
      $tinkhac=Tintuc::gettinkhac($id);
       $chitiet=Tintuc::getchitiet($id);
        $chitiet->Luotxem= $chitiet->Luotxem+1;
        $chitiet->save();
       return $this->render('chitiet',[
         'chitiet'=>$chitiet,
         'tinkhac'=>$tinkhac
       	]);
    }
   

}
