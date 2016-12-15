<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "khoanggia".
 *
 * @property integer $MaKG
 * @property integer $KGDau
 * @property integer $KGCuoi
 * @property integer $Trangthai
 */
class Khoanggia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'khoanggia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['KGDau', 'KGCuoi', 'Trangthai'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'MaKG' => 'Ma Kg',
            'KGDau' => 'Kgdau',
            'KGCuoi' => 'Kgcuoi',
            'Trangthai' => 'Trangthai',
        ];
    }
    public function getkhoanggia()
    {
        $datakhoanggia=Khoanggia::find()->where(['Trangthai'=>1])->all();
        return $datakhoanggia;
    }
}
