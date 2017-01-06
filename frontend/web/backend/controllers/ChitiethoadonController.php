<?php

namespace backend\controllers;
use backend\models\Chitiethoadon;

class ChitiethoadonController extends \yii\web\Controller
{
    public function actionIndex($id)
    {  
    	$datachitiethd=Chitiethoadon::getchitiethoadon($id);

        return $this->render('index',[
             'datachitiethd'=>$datachitiethd
        	]);
    }

}
