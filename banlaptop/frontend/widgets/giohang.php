<?php 
namespace frontend\widgets;
use yii\base\Widget;
use yii\web\Session;



class giohang extends Widget{
	public function init(){
		parent::init();
	}
	public function run(){
		$session = new Session;
		$total=0;
		if(isset($session['cart']))
		{
			$cart=$session['cart'];
			foreach ($cart as $key => $value) {
				$total+=$value['sl'];
			}
		}
		else
		{
			$total=0;
		}
		return $this->render('giohang',[
			'total'=>$total
			
			]);
		
		
	}
}
?>