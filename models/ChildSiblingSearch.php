<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ChildSibling;

/**
 * ChildSiblingSearch represents the model behind the search form of `app\models\ChildSibling`.
 */
class ChildSiblingSearch extends ChildSibling
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'fk_child', 's_order'], 'integer'],
            [['s_name', 'occupation'], 'safe'],
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
        $query = ChildSibling::find();

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
            's_order' => $this->s_order,
        ]);

        $query->andFilterWhere(['like', 's_name', $this->s_name])
            ->andFilterWhere(['like', 'occupation', $this->occupation]);

        return $dataProvider;
    }
}
