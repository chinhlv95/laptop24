<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "chitiethoadon".
 *
 * @property integer $MaCTDH
 * @property integer $MaSP
 * @property integer $SoLuong
 * @property string $ChietKhau
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
            'MaDonHang' => 'Ma Don Hang',
        ];
    }
    public function getdetailorder($mahd)
    {
        $datadetailorder=Chitiethoadon::findBysql("SELECT * from sanpham s, chitiethoadon ct WHERE s.MaSP=ct.MaSP and ct.MaDonHang=$mahd")->asArray()->all();
        return $datadetailorder;
    }
}
