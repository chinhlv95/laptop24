<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property integer $Menu_ID
 * @property string $Name
 * @property string $URL
 * @property string $Images
 * @property integer $Status
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name', 'URL', 'Images'], 'required'],
            [['Status'], 'integer'],
            [['Name', 'URL', 'Images'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Menu_ID' => 'Menu  ID',
            'Name' => 'Name',
            'URL' => 'Url',
            'Images' => 'Images',
            'Status' => 'Status',
        ];
    }
    public function getmenu()
    {
        $datamenu=Menu::find()->where(['Status'=>1])->all();
        return $datamenu;
    }
}
