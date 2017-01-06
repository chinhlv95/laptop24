<?php

namespace frontend\models;

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
            'MaTT' => 'Ma Tt',
            'TenTT' => 'Ten Tt',
            'Mota' => 'Mota',
            'Trangthai' => 'Trangthai',
        ];
    }
    public function getthanhtoan()
    {
        $datathanhtoan=Thanhtoan::find()->where(['Trangthai'=>1])->all();
        return $datathanhtoan;
    }
}
