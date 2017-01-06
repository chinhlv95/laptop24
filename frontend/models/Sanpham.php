<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "sanpham".
 *
 * @property integer $MaSP
 * @property integer $MaLSP
 * @property string $Tensanpham
 * @property string $Mota
 * @property string $Thongsokythuat
 * @property integer $Trangthai
 * @property string $Image
 * @property string $smallImage
 * @property string $mediumImage
 * @property string $largeImage
 * @property string $gianhap
 * @property string $giaban
 * @property integer $chietkhau
 */
class Sanpham extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sanpham';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MaLSP', 'Tensanpham'], 'required'],
            [['MaLSP', 'Trangthai', 'chietkhau'], 'integer'],
            [['Mota', 'Thongsokythuat'], 'string'],
            [['gianhap', 'giaban'], 'number'],
            [['Tensanpham', 'Image', 'smallImage', 'mediumImage', 'largeImage'], 'string', 'max' => 255],
            [['Tensanpham'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'MaSP' => 'Ma Sp',
            'MaLSP' => 'Ma Lsp',
            'Tensanpham' => 'Tensanpham',
            'Mota' => 'Mota',
            'Thongsokythuat' => 'Thongsokythuat',
            'Trangthai' => 'Trangthai',
            'Image' => 'Image',
            'smallImage' => 'Small Image',
            'mediumImage' => 'Medium Image',
            'largeImage' => 'Large Image',
            'gianhap' => 'Gianhap',
            'giaban' => 'Giaban',
            'chietkhau' => 'Chietkhau',
        ];
    }
    public function getallrand()
    {
        $datasanphamall=Sanpham::findBysql("select * from sanpham where Trangthai=1 order by rand() desc limit 0,9")->asArray()->all();
        return $datasanphamall;
    }
    public function getmoinhatsp()
    {
        $datamoinhatsp=Sanpham::findBysql("select * from sanpham where Trangthai=1 order by  MaSP DESC limit 0,6")->asArray()->all();
        return $datamoinhatsp;
    }
      public function getall()
    {
        $all=Sanpham::findBysql("select * from loaisanpham l, sanpham s where l.MaLSP=s.MaLSP")->asArray()->all();
        return $all;
    }
    public function getloaisp($id)
    {
          $loaisp=Sanpham::findBysql("select * from loaisanpham l, sanpham s where l.MaLSP=s.MaLSP and s.MaLSP=$id")->asArray()->all();
        return $loaisp;
    }
    public function getcartsp($id)
    {
        $cartsp=Sanpham::findOne(['MaSP'=>$id]);
        return $cartsp;
    }
       public function getsanphamlienquan($id,$masp)
    {
          $loaisp=Sanpham::findBysql("select * from loaisanpham l, sanpham s where l.MaLSP=s.MaLSP and s.MaLSP=$id and s.MaSP <>$masp limit 0,6")->asArray()->all();
        return $loaisp;
    }

    public function getsanphammuanhieu()
    {
          $sanphammuanhieu=Sanpham::find()->where(['Muanhieu'=>1])->limit(6)->asArray()->all();
        return $sanphammuanhieu;
    }
    public function autocomplete()
    {
        $dataauto=Sanpham::findBysql("select Tensanpham from sanpham")->asArray()->all();
        return $dataauto;
    }
   
    public function getsanphamthuoctinh()
   {
    return $this->hasMany(sanphamthuoctinh::className(), ['MaSP' => 'MaSP']);
    }

}
