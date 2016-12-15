<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "lienhe".
 *
 * @property integer $ID
 * @property string $Name
 * @property string $Address
 * @property string $Phone
 * @property string $Email
 * @property string $Detail
 */
class Lienhe extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lienhe';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name', 'Address', 'Phone', 'Email', 'Detail'], 'required'],
            [['Name', 'Address', 'Phone', 'Email', 'Detail'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Name' => 'Name',
            'Address' => 'Address',
            'Phone' => 'Phone',
            'Email' => 'Email',
            'Detail' => 'Detail',
        ];
    }
   public function getlienhe()
   {

    $datalienhe=Lienhe::find()->all();
    return $datalienhe;
   }
}
