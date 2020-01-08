<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Wisatawan;

/**
 * WisatawanSearch represents the model behind the search form of `app\models\Wisatawan`.
 */
class WisatawanSearch extends Wisatawan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_wisatawan', 'No_telp'], 'integer'],
            [['Nama', 'Nama_instansi', 'Alamat', 'Email'], 'safe'],
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
        $query = Wisatawan::find();

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
            'Id_wisatawan' => $this->Id_wisatawan,
            'No_telp' => $this->No_telp,
        ]);

        $query->andFilterWhere(['like', 'Nama', $this->Nama])
            ->andFilterWhere(['like', 'Nama_instansi', $this->Nama_instansi])
            ->andFilterWhere(['like', 'Alamat', $this->Alamat])
            ->andFilterWhere(['like', 'Email', $this->Email]);

        return $dataProvider;
    }
}
