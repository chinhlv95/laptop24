<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "chitiethoadon".
 *
 * @property integer $MaCTDH
 * @property integer $MaSP
 * @property integer $SoLuong
 * @property integer $ChietKhau
 * @property integer $Gia
 * @property integer $MaDonHang
 */
class Chitiethoadon extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'chitiethoadon';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MaSP', 'SoLuong', 'ChietKhau', 'Gia', 'MaDonHang'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'MaCTDH' => 'Ma Ctdh',
            'MaSP' => 'Ma Sp',
            'SoLuong' => 'So Luong',
            'ChietKhau' => 'Chiet Khau',
            'Gia' => 'Gia',
            'MaDonHang' => 'Ma Don Hang',
        ];
    }
    public function getchitiethoadon($id)
    {
        $sql="select * from  chitiethoadon c, sanpham s where s.MaSP=c.MaSP and c.MaDonHang=$id";
        $datachitiethd=Chitiethoadon::findBysql($sql)->asArray()->all();
        return $datachitiethd;
    }
}
