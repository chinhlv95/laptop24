<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "loaisanpham".
 *
 * @property integer $MaLSP
 * @property string $Tenloaisp
 * @property integer $Trangthai
 * @property string $Mota
 * @property string $Image
 */
class Loaisanpham extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'loaisanpham';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Tenloaisp'], 'required'],
            [['Trangthai'], 'integer'],
            [['Tenloaisp', 'Mota', 'Image'], 'string', 'max' => 255],
            [['Tenloaisp'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'MaLSP' => 'Ma Lsp',
            'Tenloaisp' => 'Tenloaisp',
            'Trangthai' => 'Trangthai',
            'Mota' => 'Mota',
            'Image' => 'Image',
        ];
    }
    public function getthuonghieu()
    {
      $datathuonghieu=Loaisanpham::findBysql("SELECT l.MaLSP,l.Tenloaisp, COUNT(s.MaSP) as tong
        from loaisanpham l, sanpham s
        WHERE l.MaLSP=s.MaLSP and s.Trangthai=1 and l.Trangthai=1
        GROUP BY l.MaLSP
        ")->asArray()->all();
                return  $datathuonghieu;
    }
    public function getall()
    {
        $dataloaisp=Loaisanpham::find()->all();
        return  $dataloaisp;
    }
    
}
