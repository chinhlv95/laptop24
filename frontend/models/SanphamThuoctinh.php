<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "sanpham_thuoctinh".
 *
 * @property integer $MaSP
 * @property integer $MaLTT
 * @property integer $size
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
            [['MaSP', 'MaLTT'], 'required'],
            [['MaSP', 'MaLTT', 'size'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'MaSP' => 'Ma Sp',
            'MaLTT' => 'Ma Ltt',
            'size' => 'Size',
        ];
    }
    public function getttsp($maltt)
    {
        $sql="SELECT DISTINCT t.MaLTT,t.TenLTT ,st.Tengoi,st.size from sanpham_thuoctinh st, thuoctinh t where st.MaLTT=t.MaLTT and st.MaLTT=$maltt ORDER BY st.size DESC";
        $datattsp=SanphamThuoctinh::findBysql($sql)->asArray()->all();
        return $datattsp;
    }
    

}
