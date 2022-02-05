<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Shef;

/**
 * ShefSearch represents the model behind the search form of `common\models\Shef`.
 */
class ShefSearch extends Shef
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name', 'profession', 'link1', 'link2', 'link3', 'link4', 'image'], 'safe'],
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
        $query = Shef::find();

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
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'profession', $this->profession])
            ->andFilterWhere(['like', 'link1', $this->link1])
            ->andFilterWhere(['like', 'link2', $this->link2])
            ->andFilterWhere(['like', 'link3', $this->link3])
            ->andFilterWhere(['like', 'link4', $this->link4])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
