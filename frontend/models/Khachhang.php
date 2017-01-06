<?php

namespace frontend\models;
use yii\base\Model;

use Yii;

/**
 * This is the model class for table "khachhang".
 *
 * @property integer $MaKhachHang
 * @property string $TenKhachHang
 * @property string $Email
 * @property string $SoDienThoai
 * @property integer $GioiTinh
 * @property string $NgaySinh
 * @property string $DiaChi
 */
class Khachhang extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'khachhang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TenKhachHang', 'SoDienThoai', 'GioiTinh', 'NgaySinh', 'DiaChi'], 'required','message'=>"nhập đầy đủ"],
            [['GioiTinh'], 'integer'],
            [['NgaySinh'], 'safe'],
            [['TenKhachHang', 'Email', 'SoDienThoai', 'DiaChi'], 'string', 'max' => 255],
            [['TenKhachHang'], 'unique'],
            [['SoDienThoai'], 'unique','message'=>"Số điện thoại đã tồn tại"],
            [['Email'], 'unique','message'=>"Email đã tồn tại"],
              ['captcha', 'captcha','message'=>"Chưa nhập đúng mã captcha"],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'MaKhachHang' => 'Ma Khach Hang',
            'TenKhachHang' => 'Tên Khách hàng',
            'Email' => 'Email',
            'SoDienThoai' => 'Điện thoại',
            'GioiTinh' => 'Giới tính',
            'NgaySinh' => 'Ngày Sinh',

            'DiaChi' => 'Địa Chỉ',
            'captcha'=>""
        ];
    }
    public function sendEmail($mail)
    {
        return Yii::$app->mailer->compose()
            ->setTo($mail)
            ->setFrom('kienkienutc95@gmai.com')
            ->setSubject('đăng ký')
            ->setTextBody('Bạn đã đăng ký thành công')
            ->send();
    }
    public function login($username,$password)
    {
        // $sql="SELECT count(*) from khachhang k, dangnhap d where k.MaKhachHang=d.MaKhachHang and k.Email='$username' and d.password='$password'";
        $datalogin=Khachhang::find()->select(['password'])->joinWith('dangnhap')->where(['Email'=>$username,'password'=>$password])->count();
        return $datalogin;
    }
    public function getdangnhap()
    {
        return $this->hasMany(dangnhap::className(), ['MaKhachHang' => 'MaKhachHang']);
    }
    public function getkhachhang($username)
    {
        
        $datakhachhang=Khachhang::findOne(['Email'=>$username]);
        return $datakhachhang;
    }
}
