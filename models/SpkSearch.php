<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Spk;

/**
 * SpkSearch represents the model behind the search form of `app\models\Spk`.
 */
class SpkSearch extends Spk
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'kebersihan', 'fasilitas', 'kenyamanan', 'suasana'], 'integer'],
            [['nama_asrama'], 'safe'],
            [['nilai_hasil'], 'number'],
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
        $query = Spk::find();

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
            'id' => $this->id,
            'kebersihan' => $this->kebersihan,
            'fasilitas' => $this->fasilitas,
            'kenyamanan' => $this->kenyamanan,
            'suasana' => $this->suasana,
            'nilai_hasil' => $this->nilai_hasil,
        ]);

        $query->andFilterWhere(['like', 'nama_asrama', $this->nama_asrama]);

        return $dataProvider;
    }
}
