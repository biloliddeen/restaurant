<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Contact;

/**
 * ContactSearch represents the model behind the search form of `common\models\Contact`.
 */
class ContactSearch extends Contact
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['location', 'days_hours', 'email1', 'email2', 'call1', 'call2', 'link1', 'link2', 'link3', 'link4'], 'safe'],
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
        $query = Contact::find();

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

        $query->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'days_hours', $this->days_hours])
            ->andFilterWhere(['like', 'email1', $this->email1])
            ->andFilterWhere(['like', 'email2', $this->email2])
            ->andFilterWhere(['like', 'call1', $this->call1])
            ->andFilterWhere(['like', 'call2', $this->call2])
            ->andFilterWhere(['like', 'link1', $this->link1])
            ->andFilterWhere(['like', 'link2', $this->link2])
            ->andFilterWhere(['like', 'link3', $this->link3])
            ->andFilterWhere(['like', 'link4', $this->link4]);

        return $dataProvider;
    }
}
