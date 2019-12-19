<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Siswa;

/**
 * SiswaSearch represents the model behind the search form of `common\models\Siswa`.
 */
class SiswaSearch extends Siswa
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID'], 'integer'],
            [['Nama', 'NIS', 'ID_Kelas', 'Tgl_Masuk'], 'safe'],
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
        $query = Siswa::find();
        $query -> joinWith('kelas');

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
            'ID' => $this->ID,
        ]);

        $query->andFilterWhere(['like', 'Nama', $this->Nama])
            ->andFilterWhere(['like', 'NIS', $this->NIS])
            ->andFilterWhere(['like', 'ID_Kelas', $this->ID_Kelas])
            ->andFilterWhere(['like', 'Tgl_Masuk', $this->Tgl_Masuk]);

        return $dataProvider;
    }
}
