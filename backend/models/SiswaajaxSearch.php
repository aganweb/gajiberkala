<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Siswaajax;

/**
 * SiswaajaxSearch represents the model behind the search form about `common\models\Siswaajax`.
 */
class SiswaajaxSearch extends Siswaajax
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'gajiortu'], 'integer'],
            [['Nama', 'NIS', 'ID_Kelas', 'tglmasuk'], 'safe'],
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
        $query = Siswaajax::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'ID' => $this->ID,
            'tglmasuk' => $this->tglmasuk,
            'gajiortu' => $this->gajiortu,
        ]);

        $query->andFilterWhere(['like', 'Nama', $this->Nama])
            ->andFilterWhere(['like', 'NIS', $this->NIS])
            ->andFilterWhere(['like', 'ID_Kelas', $this->ID_Kelas]);

        return $dataProvider;
    }
}
