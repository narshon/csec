<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Consent;

/**
 * ConsentSearch represents the model behind the search form of `app\models\Consent`.
 */
class ConsentSearch extends Consent
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'fk_eligibilty_id', 'consent_edu', 'consent_legal', 'consent_disability', 'consent_psycho', 'consent_comm', 'consent_health', 'consent_livelihood', 'consent_family'], 'integer'],
            [['caregiver_init', 'caregiver_contact', 'child_init', 'staff_init', 'consent_date'], 'safe'],
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
        $query = Consent::find();

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
            'fk_eligibilty_id' => $this->fk_eligibilty_id,
            'consent_edu' => $this->consent_edu,
            'consent_legal' => $this->consent_legal,
            'consent_disability' => $this->consent_disability,
            'consent_psycho' => $this->consent_psycho,
            'consent_comm' => $this->consent_comm,
            'consent_health' => $this->consent_health,
            'consent_livelihood' => $this->consent_livelihood,
            'consent_family' => $this->consent_family,
            'consent_date' => $this->consent_date,
        ]);

        $query->andFilterWhere(['like', 'caregiver_init', $this->caregiver_init])
            ->andFilterWhere(['like', 'caregiver_contact', $this->caregiver_contact])
            ->andFilterWhere(['like', 'child_init', $this->child_init])
            ->andFilterWhere(['like', 'staff_init', $this->staff_init]);

        return $dataProvider;
    }
}
