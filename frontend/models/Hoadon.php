<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "hoadon".
 *
 * @property integer $MaDonHang
 * @property integer $MaKhachHang
 * @property integer $MaDiaChi
 * @property string $NgayDatHang
 * @property string $ChietKhau
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
          
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
           
        ];
    }
    public function gethoadon($makhach)
    {
        $datahistory=Hoadon::find()->where(['MaKhachHang'=>$makhach])->asArray()->all();
        return $datahistory;
    }
}
