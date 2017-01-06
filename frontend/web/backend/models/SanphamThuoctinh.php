<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sanpham_thuoctinh".
 *
 * @property integer $MaSP
 * @property integer $MaLTT
 * @property integer $size
  * @property string $Tengoi
 */
class SanphamThuoctinh extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sanpham_thuoctinh';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MaSP', 'MaLTT'], 'required','message'=>"Đã thêm đầy đủ thuộc tính sản phẩm, quay lại thêm sản phẩm khác"],
            [['MaSP', 'MaLTT', 'size'], 'integer'],
            [['Tengoi'],'string']

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'MaSP' => 'Sản phẩm',
            'MaLTT' => 'Thuộc tính sản phẩm',
            'size' => 'Size',
            'Tengoi'=>'Tên gọi'
        ];
    }
      public  function getsanpham() {
    return $this->hasOne(sanpham::classname(), ['MaSP' => 'MaSP']);
    }
      public  function getthuoctinh() {
    return $this->hasOne(thuoctinh::classname(), ['MaLTT' => 'MaLTT']);
    }
}
