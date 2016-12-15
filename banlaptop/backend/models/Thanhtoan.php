<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "thanhtoan".
 *
 * @property integer $MaTT
 * @property string $TenTT
 * @property string $Mota
 * @property integer $Trangthai
 */
class Thanhtoan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'thanhtoan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TenTT', 'Mota', 'Trangthai'], 'required'],
            [['Trangthai'], 'integer'],
            [['TenTT', 'Mota'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'MaTT' => 'ID',
            'TenTT' => 'Hình Thức Thanh Toán',
            'Mota' => 'Mô Tả',
            'Trangthai' => 'Trạng Thái',
        ];
    }
}
