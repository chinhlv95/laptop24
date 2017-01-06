<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tintuc".
 *
 * @property integer $Mabt
 * @property string $Tenbt
 * @property string $Tomtat
 * @property string $Noidung
 * @property string $Ngaycn
 * @property string $Image
 * @property integer $Luotxem
 * @property integer $Trangthai
 */
class Tintuc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tintuc';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Tenbt', 'Image', 'Trangthai'], 'required'],
            [['Tomtat', 'Noidung'], 'string'],
            [['Ngaycn'], 'safe'],
            [['Luotxem', 'Trangthai'], 'integer'],
            [['Tenbt', 'Image'], 'string', 'max' => 255],
            [['Tenbt'], 'unique'],
         
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Mabt' => 'ID',
            'Tenbt' => 'Tên bản tin',
            'Tomtat' => 'Nội dung tóm tắt',
            'Noidung' => 'Nội dung',
            'Ngaycn' => 'Ngày cập nhật',
            'Image' => 'ảnh',
            'Luotxem' => 'Lượt xem',
            'Trangthai' => 'Trạng Thái',
        ];
    }
}
