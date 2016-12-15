<?php
namespace frontend\controllers;
use  frontend\models\Sanpham;
use  frontend\models\sanpham_thuoctinh;
use yii\data\Pagination;

class SanphamController extends \yii\web\Controller
{
    public function actionIndex()
    {
     $query =Sanpham::find()->where(['Trangthai'=>1])->orderBy(["MaSP"=>SORT_DESC]);
     $countQuery = $query->count();
    $pagination = new Pagination(['totalCount' => $countQuery]);
    $dataproduct = $query->offset($pagination->offset)->limit($pagination->limit)->all();
    return $this->render('index', [
         'dataproduct' => $dataproduct,
         'pagination' => $pagination,
     ]);
       
    }
    
    public function actionSanphamtheoloai()
    {

        $loaisp;
        $pagination;
           
        if(isset($_GET['id']))
        {
            $matlsp=$_GET['id'];
             $query=Sanpham::find()->where(['MaLSP'=>$matlsp]);
             $countQuery = $query->count();
           $pagination = new Pagination(['totalCount' => $countQuery]);
            $loaisp= $query->offset($pagination->offset)->limit($pagination->limit)->all();

        }
        if(isset($_GET['first'])&&isset($_GET['last']))
        {

            $first=$_GET['first'];
            $last=$_GET['last'];
            $query=Sanpham::findBysql("select * from sanpham where giaban>=$first and giaban<=$last");
            $countQuery = $query->count();
            $pagination = new Pagination(['totalCount' => $countQuery]);
            $loaisp= $query->offset($pagination->offset)->limit($pagination->limit)->all();
        }
          if(isset($_GET['thuoctinh'])&&isset($_GET['size']))
          {
             $thuoctinh=$_GET['thuoctinh'];
             $size=$_GET['size'];
            
            $query=Sanpham::find()->joinwith(['sanphamthuoctinh'])->where(['MaLTT'=>$thuoctinh,'size'=>$size]);
            $countQuery = $query->count();
            $pagination = new Pagination(['totalCount' => $countQuery]);
            $loaisp= $query->offset($pagination->offset)->limit($pagination->limit)->all();

          }
 
    	
    	 return $this->render('sanphamtheoloai'
            ,[
              'loaisp'=>$loaisp,
              'pagination'=>$pagination
             
            ]
    	 	);

    }
    public function actionChitietsanpham()
    {
       $id=$_GET['id'];
         $cartsp=Sanpham::getcartsp($id);
      $datasplq=Sanpham::getsanphamlienquan($cartsp['MaLSP'],$id);
     
         return $this->render('chitietsanpham',[
            'cartsp'=>$cartsp,
            'datasplq'=>$datasplq,
           
            ]);
    }
}
