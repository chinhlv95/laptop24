<?php 
namespace frontend\widgets;
use yii\base\Widget;
use yii\web\Session;
use frontend\models\Tintuc;



class tinhot extends Widget{
	public function init(){
		parent::init();
	}
	public function run(){
		$tinhot=Tintuc::gettinhot();

		return $this->render('tinhot',[
          'tinhot'=>$tinhot
			]);
		
		
	}
}
?>