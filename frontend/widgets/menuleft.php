<?php 
namespace frontend\widgets;
use yii\base\Widget;
use frontend\models\Khoanggia;
use frontend\models\Thuoctinh;
use frontend\models\SanphamThuoctinh;


class menuleft extends Widget{
	public function init(){
		parent::init();
	}
	public function run(){
    
         $datakhoanggia=Khoanggia::getkhoanggia();
         $datathuoctinh=Thuoctinh::getthuoctinh();
          $datasptt=new SanphamThuoctinh();
      
          return $this->render('menuleft',[
             'datakhoanggia'=>$datakhoanggia,
             'datathuoctinh'=>$datathuoctinh,
             'datasptt'=>$datasptt,
          	]);
          
		
	}
}
?>