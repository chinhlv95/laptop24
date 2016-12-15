<?php

namespace backend\models;

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
 * @property string $captcha
 */
class Khachhang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
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
            [['GioiTinh'], 'integer'],
            [['NgaySinh'], 'safe'],
            [['TenKhachHang', 'Email', 'SoDienThoai', 'DiaChi'], 'string', 'max' => 255],
            [['captcha'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'MaKhachHang' => 'Ma Khach Hang',
            'TenKhachHang' => 'Ten Khach Hang',
            'Email' => 'Email',
            'SoDienThoai' => 'So Dien Thoai',
            'GioiTinh' => 'Gioi Tinh',
            'NgaySinh' => 'Ngay Sinh',
            'DiaChi' => 'Dia Chi',
            'captcha' => 'Captcha',
        ];
    }
}
