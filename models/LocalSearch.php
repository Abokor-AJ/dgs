<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Local;

/**
 * LocalSearch represents the model behind the search form of `app\models\Local`.
 */
class LocalSearch extends Local
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'number_of_ip'], 'integer'],
            [['name', 'block', 'plage', 'subnet', 'interface', 'status', 'updated_date', 'created_date'], 'safe'],
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
        $query = Local::find();

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
            'number_of_ip' => $this->number_of_ip,
            'updated_date' => $this->updated_date,
            'created_date' => $this->created_date,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'block', $this->block])
            ->andFilterWhere(['like', 'plage', $this->plage])
            ->andFilterWhere(['like', 'subnet', $this->subnet])
            ->andFilterWhere(['like', 'interface', $this->interface])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
