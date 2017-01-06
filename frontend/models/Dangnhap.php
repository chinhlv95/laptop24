<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "dangnhap".
 *
 * @property integer $id
 * @property string $password
 * @property integer $MaKhachHang
 * @property string $NgayTaoTK
 * @property string $LanTruyCapCuoi
 */
class Dangnhap extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dangnhap';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['password', 'MaKhachHang', 'NgayTaoTK', 'LanTruyCapCuoi'], 'required'],
            [['MaKhachHang'], 'integer'],
            [['NgayTaoTK', 'LanTruyCapCuoi'], 'safe'],
            [['password'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'password' => 'Password',
            'MaKhachHang' => 'Ma Khach Hang',
            'NgayTaoTK' => 'Ngay Tao Tk',
            'LanTruyCapCuoi' => 'Lan Truy Cap Cuoi',
        ];
    }
}
