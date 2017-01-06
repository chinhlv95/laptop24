<?php

namespace backend\controllers;
use backend\models\hoadon;

class BaocaoController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	if(isset($_POST['month'])&&isset($_POST['year']))
    	{
    		$month=$_POST['month'];
    		$year=$_POST['year'];
    	$report=Hoadon::getreport($month,$year);

         return json_encode($report);
       }
       else
       {
       	return $this ->render("index");
       }
    }

    public function actionDoanhthu()
    {

    	if(isset($_POST['month']) && isset($_POST['year'])&&isset($_POST['yearnow']))
    	{
    		$doanhthu=new Hoadon();

    		$month=$_POST['month'];
    		$year=$_POST['year'];
    		$yearnow=$_POST['yearnow'];
    		if($year=="")
    		{
             $doanhthu=$doanhthu->getbaocao($month,$yearnow);
             
    		}
    		if($year!=="")
    		{
    		$doanhthu=$doanhthu->getbaocao($month,$year);	
    		}
    		return json_encode( $doanhthu);
           

    	}
    	else
    	{
    	return $this->render('doanhthu');
        }
    }
    public function actionBanchay()
    {
        if(isset($_POST['month']) && isset($_POST['year']))
        {
            $month=$_POST['month'];
            $year=$_POST['year'];
            $reportbanchay=Hoadon::getbanchay($month,$year);
            return json_encode($reportbanchay);
        }
        else
        {
        return $this->render('banchay');
        }
    }

}
