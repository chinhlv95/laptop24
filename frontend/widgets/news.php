<?php 
namespace frontend\widgets;
use yii\base\Widget;
use frontend\models\Tintuc;



class news extends Widget{
	public function init(){
		parent::init();
	}
	public function run(){
    
       $tinhot=Tintuc::gettinhot();
          return $this->render('news',[
            'tinhot'=>$tinhot
          	]);
          
		
	}
}
?>