<?php

namespace backend\models;

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
            [['Tenloaisp'], 'required','message'=>'Chưa Nhập Loại Sản Phẩm'],
            [['Trangthai'], 'integer'],
            [['Tenloaisp', 'Mota'], 'string', 'max' => 255],
            [['Tenloaisp'], 'unique'],
            [['Image'],'file'],
          
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'MaLSP' => 'ID',
            'Tenloaisp' => 'Loại sản phẩm',
            'Trangthai' => 'Trạng Thái',
            'Mota' => 'Mô Tả',
            'Image' => 'ảnh',
        ];
    }
    public function getloaisp()
    {
        $dataloaisp=Loaisanpham::find()->all();
        return $dataloaisp;
    }
}
