<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Hoadon;

/**
 * HoadonSearch represents the model behind the search form about `backend\models\Hoadon`.
 */
class HoadonSearch extends Hoadon
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MaDonHang', 'MaKhachHang', 'MaDiaChi', 'MaVC', 'MaTT', 'TrangThai', 'TongTien'], 'integer'],
            [['NgayDatHang'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {    
         $query;
         if(isset($_GET['current']))
         {
          $NgayDatHang=$_GET['current'];
          $query = Hoadon::find()->where(['NgayDatHang'=>$NgayDatHang]);
         }
         else
         {
        $query = Hoadon::find()->orderBy(['NgayDatHang' => SORT_DESC]);
        }

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'MaDonHang' => $this->MaDonHang,
            'MaKhachHang' => $this->MaKhachHang,
            'MaDiaChi' => $this->MaDiaChi,
            'NgayDatHang' => $this->NgayDatHang,
            'MaVC' => $this->MaVC,
            'MaTT' => $this->MaTT,
            'TrangThai' => $this->TrangThai,
            'TongTien' => $this->TongTien,
        ]);

        return $dataProvider;
    }
}
