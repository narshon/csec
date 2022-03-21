<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\OtherSibling;

/**
 * OtherSiblingSearch represents the model behind the search form of `app\models\OtherSibling`.
 */
class OtherSiblingSearch extends OtherSibling
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'fk_child', 'age'], 'integer'],
            [['name_sibling', 'nickname', 'location', 'edu_empl', 'class'], 'safe'],
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
        $query = OtherSibling::find();

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
            'age' => $this->age,
        ]);

        $query->andFilterWhere(['like', 'name_sibling', $this->name_sibling])
            ->andFilterWhere(['like', 'nickname', $this->nickname])
            ->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'edu_empl', $this->edu_empl])
            ->andFilterWhere(['like', 'class', $this->class]);

        return $dataProvider;
    }
}
