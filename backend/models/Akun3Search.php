<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Akun3;

/**
 * Akun3Search represents the model behind the search form of `common\models\Akun3`.
 */
class Akun3Search extends Akun3
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_akun1', 'kd_akun2', 'kd_akun3', 'akun3'], 'safe'],
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
        $query = Akun3::find();

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
        $query->andFilterWhere(['like', 'kd_akun1', $this->kd_akun1])
            ->andFilterWhere(['like', 'kd_akun2', $this->kd_akun2])
            ->andFilterWhere(['like', 'kd_akun3', $this->kd_akun3])
            ->andFilterWhere(['like', 'akun3', $this->akun3]);

        return $dataProvider;
    }
}
