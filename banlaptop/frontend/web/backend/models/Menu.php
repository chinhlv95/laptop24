<?php

namespace backend\models;

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
            'Menu_ID' => 'ID',
            'Name' => 'Tên Menu',
            'URL' => 'Đường Dẫn',
            'Images' => 'icon',
            'Status' => 'Trạng Thái',
        ];
    }
}
