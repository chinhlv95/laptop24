<?php 
namespace frontend\widgets;
use yii\base\Widget;
use frontend\models\Loaisanpham;


class thuonghieu extends Widget{
	public function init(){
		parent::init();
	}
	public function run(){
    
         $datathuonghieu=Loaisanpham::getthuonghieu();
          return $this->render('thuonghieu',[
             'datathuonghieu'=>$datathuonghieu
          	]);

	}
}
?>