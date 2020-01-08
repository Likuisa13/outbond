<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PaketOutbond;

/**
 * PaketOutbondSearch represents the model behind the search form of `app\models\PaketOutbond`.
 */
class PaketOutbondSearch extends PaketOutbond
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_paket', 'Harga'], 'integer'],
            [['Kd_paket', 'Jenis_paket', 'Fasilitas', 'Kegiatan'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = PaketOutbond::find();

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
            'Id_paket' => $this->Id_paket,
            'Harga' => $this->Harga,
        ]);

        $query->andFilterWhere(['like', 'Kd_paket', $this->Kd_paket])
            ->andFilterWhere(['like', 'Jenis_paket', $this->Jenis_paket])
            ->andFilterWhere(['like', 'Fasilitas', $this->Fasilitas])
            ->andFilterWhere(['like', 'Kegiatan', $this->Kegiatan]);

        return $dataProvider;
    }
}
