<?php

namespace frontend\controllers; 
use yii;
use frontend\models\Sanpham;
use yii\data\Pagination;

class SearchController extends \yii\web\Controller
{
     public function beforeAction($action) {
    $this->enableCsrfValidation = true;
    return parent::beforeAction($action);
    }

    public function actionResult($s)
    {
   $query = Sanpham::findBysql("select * from sanpham where Trangthai=1 and Tensanpham like '%$s%'");
	$count = $query->count();
	$pagination = new Pagination(['totalCount' => $count]);
	$articles = $query->offset($pagination->offset)
    ->limit($pagination->limit)
    ->all();
        return $this->render('result',[
        	'articles'=>$articles,
            'pagination'=>$pagination
        	]);
    }
    public function actionAuto()
    {
       
    
       $dataauto=Sanpham::autocomplete();
       echo json_encode($dataauto);
      
        
    }

}
