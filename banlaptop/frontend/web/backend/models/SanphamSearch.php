<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Sanpham;

/**
 * SanphamSearch represents the model behind the search form about `backend\models\Sanpham`.
 */
class SanphamSearch extends Sanpham
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MaSP', 'MaLSP', 'Trangthai', 'chietkhau', 'Muanhieu', 'Baohanh'], 'integer'],
            [['Tensanpham', 'Mota', 'Thongsokythuat', 'Image', 'smallImage', 'mediumImage', 'largeImage', 'dacdiem'], 'safe'],
            [['gianhap', 'giaban'], 'number'],
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
        $query = Sanpham::find()->joinwith('loaisanpham')->orderBy(['MaLSP'=>'DESC']);

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
            'MaSP' => $this->MaSP,
            'MaLSP' => $this->MaLSP,
            'Trangthai' => $this->Trangthai,
            'gianhap' => $this->gianhap,
            'giaban' => $this->giaban,
            'chietkhau' => $this->chietkhau,
            'Muanhieu' => $this->Muanhieu,
            'Baohanh' => $this->Baohanh,
        ]);

        $query->andFilterWhere(['like', 'Tensanpham', $this->Tensanpham])
            ->andFilterWhere(['like', 'Mota', $this->Mota])
            ->andFilterWhere(['like', 'Thongsokythuat', $this->Thongsokythuat])
            ->andFilterWhere(['like', 'Image', $this->Image])
            ->andFilterWhere(['like', 'smallImage', $this->smallImage])
            ->andFilterWhere(['like', 'mediumImage', $this->mediumImage])
            ->andFilterWhere(['like', 'largeImage', $this->largeImage])
            ->andFilterWhere(['like', 'dacdiem', $this->dacdiem]);

        return $dataProvider;
    }
}
