<?php 
namespace frontend\widgets;
use yii\base\Widget;
use frontend\models\Menu;


class menutop extends Widget{
	public function init(){
		parent::init();
	}
	public function run(){
    
         $datamenu=Menu::getmenu();
          return $this->render('menutop',[
             'datamenu'=>$datamenu
          	]);
          
		
	}
}
?>