<?php 
namespace frontend\widgets;
use yii\base\Widget;
use frontend\models\Loaisanpham;


class category extends Widget{
	public function init(){
		parent::init();
	}
	public function run(){
    
         $dataloaisp=Loaisanpham::getall();
          return $this->render('category',[
             'dataloaisp'=>$dataloaisp
          	]);
          
		
	}
}
?>