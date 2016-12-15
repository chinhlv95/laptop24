<?php

namespace backend\models;
use backend\models\Khachhang;
use backend\models\Diachigiaohang;
use backend\models\Thanhtoan;
use backend\models\Vanchuyen;

use Yii;

/**
 * This is the model class for table "hoadon".
 *
 * @property integer $MaDonHang
 * @property integer $MaKhachHang
 * @property integer $MaDiaChi
 * @property string $NgayDatHang
 * @property integer $MaVC
 * @property integer $MaTT
 * @property integer $TrangThai
 * @property integer $Tongtien
 */
class Hoadon extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hoadon';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MaKhachHang', 'MaDiaChi', 'NgayDatHang', 'MaVC', 'MaTT', 'TongTien'], 'required'],
            [['MaKhachHang', 'MaDiaChi', 'MaVC', 'MaTT', 'TrangThai', 'TongTien'], 'integer'],
            [['NgayDatHang'], 'safe'],
          
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'MaDonHang' => 'Mã Hóa Đơn',
            'MaKhachHang' => 'Khách hàng',
            'MaDiaChi' => 'Địa chỉ',
            'NgayDatHang' => 'Ngày đặt hàng',
         
            'MaVC' => 'Hình thức vận chuyển',
            'MaTT' => 'Hình thức thanh toán',
            'TrangThai' => 'Trạng thái',
            'TongTien' => 'Tổng tiền',
        ];
    }
    public function getcountorderday()
    {

    $datacount=Hoadon::find()->where(['NgayDatHang'=>date('Y-m-d')])->count();
       
        return $datacount;
    }
    public function getreport($month,$year)
    {
     $sql="SELECT * FROM sanpham where MaSP not in (SELECT t.MaSP FROM chitiethoadon t, hoadon h where t.MaDonHang=h.MaDonHang AND YEAR(h.NgayDatHang)='$year' and MONTH(h.NgayDatHang)='$month' )";
    $report=Hoadon::findBysql($sql)->asArray()->all();
    return $report;
    }
    public function getbanchay($month,$year)
    {
        $sql="SELECT s.MaSP,s.Tensanpham,s.giaban, s.chietkhau ,SUM(s.MaSP) as soluong from sanpham s, chitiethoadon ct, hoadon hd WHERE s.MaSP=ct.MaSP and ct.MaDonHang=hd.MaDonHang and MONTH(hd.NgayDatHang)='$month' and YEAR(hd.NgayDatHang)='$year' GROUP BY s.MaSP ORDER BY SUM(s.MaSP) DESC LIMIT 0,10";
           $reportbanchay=Hoadon::findBysql($sql)->asArray()->all();
    return $reportbanchay;
    }
     public  function getkhachhang() {
    
    
    return $this->hasOne(khachhang::classname(), ['MaKhachHang' => 'MaKhachHang']);
    }
    public  function getdiachigiaohang() {
    return $this->hasOne(diachigiaohang::classname(), ['MaDiaChi' => 'MaDiaChi']);
    }
     public  function getthanhtoan() {
    return $this->hasOne(thanhtoan::classname(), ['MaTT' => 'MaTT']);
    }
     public  function getvanchuyen() {
    return $this->hasOne(vanchuyen::classname(), ['MaVC' => 'MaVC']);
    }

    public function getbaocao($month,$year)
    {
        $doanhthu;
        if($month!=="")
        {
        $sql="SELECT * FROM hoadon where YEAR(NgayDatHang)='$year' and MONTH(NgayDatHang)='$month'";
          $doanhthu=Hoadon::findBysql($sql)->asArray()->all();
        }
        else
            if($month=="")
            {
            $sql="SELECT * FROM hoadon where YEAR(NgayDatHang)='$year'";
            $doanhthu=Hoadon::findBysql($sql)->asArray()->all();
            }
          return $doanhthu;
    }
}
