<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "thuoctinh".
 *
 * @property integer $MaLTT
 * @property string $TenLTT
 * @property integer $Trangthai
 */
class Thuoctinh extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'thuoctinh';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Trangthai'], 'integer'],
            [['TenLTT'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'MaLTT' => 'ID',
            'TenLTT' => 'Tên  thuộc tính sản phẩm',
            'Trangthai' => 'Trạng Thái',
        ];
    }
    public function getthuoctinh($id)
    {
        $sql="SELECT * from thuoctinh where MaLTT not in (SELECT MaLTT from sanpham_thuoctinh where MaSP=$id)";
        $datathuoctinh=Thuoctinh::findBysql($sql)->all();
        return $datathuoctinh;
    }
     public function getthuoctinhup($MaLTT)
    {
        $datatt=Thuoctinh::find()->where(['MaLTT'=>$MaLTT])->all();
        return $datatt;
    }
}
