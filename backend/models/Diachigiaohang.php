<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "diachigiaohang".
 *
 * @property integer $MaDiaChi
 * @property integer $MaKhachHang
 * @property string $NguoiNhan
 * @property string $DiaChi
 * @property string $SDT
 * @property string $Email
 */
class Diachigiaohang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'diachigiaohang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MaKhachHang', 'NguoiNhan', 'DiaChi', 'SDT', 'Email'], 'required'],
            [['MaKhachHang'], 'integer'],
            [['NguoiNhan', 'DiaChi', 'SDT', 'Email'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'MaDiaChi' => 'Ma Dia Chi',
            'MaKhachHang' => 'Ma Khach Hang',
            'NguoiNhan' => 'Nguoi Nhan',
            'DiaChi' => 'Dia Chi',
            'SDT' => 'Sdt',
            'Email' => 'Email',
        ];
    }
}
