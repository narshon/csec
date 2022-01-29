<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\HomeVisit;

/**
 * HomeVisitSearch represents the model behind the search form of `app\models\HomeVisit`.
 */
class HomeVisitSearch extends HomeVisit
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'fk_child', 'visit_no', 'case_file_no'], 'integer'],
            [['home_visit_date', 'life_change', 'change_effect'], 'safe'],
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
        $query = HomeVisit::find();

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
            'fk_child' => $this->fk_child,
            'home_visit_date' => $this->home_visit_date,
            'visit_no' => $this->visit_no,
            'case_file_no' => $this->case_file_no,
        ]);

        $query->andFilterWhere(['like', 'life_change', $this->life_change])
            ->andFilterWhere(['like', 'change_effect', $this->change_effect]);

        return $dataProvider;
    }
}
