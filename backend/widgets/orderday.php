<?php 
namespace backend\widgets;
use yii\base\Widget;
use backend\models\Hoadon;


class orderday extends Widget{
	public function init(){
		parent::init();
	}
	public function run(){
    
         $datacount=Hoadon::getcountorderday();
       
          return $this->render('orderday',[
             'datacount'=>$datacount
          	]);
          
		
	}
}
?>