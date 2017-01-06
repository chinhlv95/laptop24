<?php

namespace frontend\models;

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
            'Mabt' => 'Mabt',
            'Tenbt' => 'Tenbt',
            'Tomtat' => 'Tomtat',
            'Noidung' => 'Noidung',
            'Ngaycn' => 'Ngaycn',
            'Image' => 'Image',
            'Luotxem' => 'Luotxem',
            'Trangthai' => 'Trangthai',
        ];
    }
    public function getall($id)
    {
    $datatintuc=Tintuc::find()->orderBy(['Mabt'=>SORT_DESC])->limit($id)->asArray()->all();
    return $datatintuc;
    }
    public function counttintuc()
    {
        $countt=Tintuc::findBySql("select * from tintuc")->count();
        return $countt;
    }
     public function getchitiet($id)
     {
       $chitiet=Tintuc::findOne(['Mabt'=>$id]);
       return $chitiet;
     }
     public function gettinkhac($id)
     {
        $tinkhac=Tintuc::findBysql("select * from tintuc where Mabt <> $id limit 0,4")->all();
        return $tinkhac;
     }
     public function gettinhot()
     {
        $tinhot=Tintuc::find()->where(['Trangthai'=>1])->orderBy(["Mabt"=>SORT_DESC])->limit(8)->asArray()->all();
        return $tinhot;
     }
}
