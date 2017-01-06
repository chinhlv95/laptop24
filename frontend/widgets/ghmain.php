<?php 
namespace frontend\widgets;
use yii\base\Widget;
use yii\web\Session;


class ghmain extends Widget{
	public function init(){
		parent::init();
	}
	public function run(){
    $session = new Session;
      if(isset($session['cart']))
		{
			$cart=$session['cart'];
        
          return $this->render('ghmain',[
             'cart'=>$cart
          	]);
      }
          
		
	}
}
?>