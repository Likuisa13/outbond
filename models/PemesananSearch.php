<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pemesanan;

/**
 * PemesananSearch represents the model behind the search form of `app\models\Pemesanan`.
 */
class PemesananSearch extends Pemesanan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_pemesanan', 'Jml_peserta', 'Total_harga'], 'integer'],
            [['Kode_pemesanan', 'Kd_paket', 'Tgl_pemesanan'], 'safe'],
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
        $query = Pemesanan::find();

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
            'Id_pemesanan' => $this->Id_pemesanan,
            'Tgl_pemesanan' => $this->Tgl_pemesanan,
            'Jml_peserta' => $this->Jml_peserta,
            'Total_harga' => $this->Total_harga,
        ]);

        $query->andFilterWhere(['like', 'Kode_pemesanan', $this->Kode_pemesanan])
            ->andFilterWhere(['like', 'Kd_paket', $this->Kd_paket]);

        return $dataProvider;
    }
}
