<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "vanchuyen".
 *
 * @property integer $MaVC
 * @property string $TenVC
 * @property string $Mota
 * @property integer $Trangthai
 */
class Vanchuyen extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vanchuyen';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TenVC', 'Mota', 'Trangthai'], 'required'],
            [['Trangthai'], 'integer'],
            [['TenVC', 'Mota'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'MaVC' => 'ID',
            'TenVC' => 'Hình Thức Vận Chuyển',
            'Mota' => 'Mô Tả',
            'Trangthai' => 'Trạng Thái',
        ];
    }
}
