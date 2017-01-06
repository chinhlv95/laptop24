<?php

namespace frontend\models;

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
            'MaLTT' => 'Ma Ltt',
            'TenLTT' => 'Ten Ltt',
            'Trangthai' => 'Trangthai',
        ];
    }
    public function getthuoctinh()
    {
        $datathuoctinh=Thuoctinh::find()->asArray()->all();
        return $datathuoctinh;
    }
}
