<?php 
namespace frontend\widgets;
use yii\base\Widget;
use frontend\models\Lienhe;


class lienlac extends Widget{
	public function init(){
		parent::init();
	}
	public function run(){
    
         $datalienhe=Lienhe::getlienhe();
          return $this->render('lienlac',[
             'datalienhe'=>$datalienhe
          	]);
          
		
	}
}
?>