<?php

namespace backend\models;

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
 * @property integer $Muanhieu
 * @property integer $Baohanh
 * @property string $dacdiem
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
            [['MaLSP', 'Trangthai', 'chietkhau', 'Muanhieu', 'Baohanh'], 'integer'],
            [['Mota', 'Thongsokythuat', 'dacdiem'], 'string'],
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
            'MaLSP' => 'Loại sản Phẩm',
            'Tensanpham' => 'Tên sản phẩm',
            'Mota' => 'Mô Tả',
            'Thongsokythuat' => 'Thông số kỹ thuật',
            'Trangthai' => 'Trạng thái',
            'Image' => 'Image',
            'smallImage' => 'Small Image',
            'mediumImage' => 'Medium Image',
            'largeImage' => 'Large Image',
            'gianhap' => 'Giá nhập',
            'giaban' => 'Giá bán',
            'chietkhau' => 'Chiết Khấu',
            'Muanhieu' => 'Sản phẩm mua nhiều',
            'Baohanh' => 'Bảo Hành',
            'dacdiem' => 'Đặc điêm',
        ];
    }
    public  function getloaisanpham() {
    return $this->hasOne(loaisanpham::classname(), ['MaLSP' => 'MaLSP']);
    }

    public function getsp(){
        $datasanpham=Sanpham::find()->all();
        return $datasanpham;
    }
    public function getsanpham($id)
    {
         $datasp=Sanpham::find()->where(['MaSP'=>$id])->all();
        return $datasp;
    }
}
