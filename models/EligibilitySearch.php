<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Eligibility;

/**
 * EligibilitySearch represents the model behind the search form of `app\models\Eligibility`.
 */
class EligibilitySearch extends Eligibility
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'factor_family', 'factor_env', 'factor_peer_pressure', 'factor_economic', 'age_range', 'child_attitude', 'caregiver_attitude', 'disability_level'], 'integer'],
            [['child_code', 'eligibility_date', 'factor_remark', 'age_remarks', 'child_attitude_rmk', 'caregiver_attitude_rmk', 'disability_level_rmk', 'kesho_kenya_rmk', 'kesho_staff_name', 'vetting_comm_rmk', 'chairperson_name'], 'safe'],
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
        $query = Eligibility::find();

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
            'eligibility_date' => $this->eligibility_date,
            'factor_family' => $this->factor_family,
            'factor_env' => $this->factor_env,
            'factor_peer_pressure' => $this->factor_peer_pressure,
            'factor_economic' => $this->factor_economic,
            'age_range' => $this->age_range,
            'child_attitude' => $this->child_attitude,
            'caregiver_attitude' => $this->caregiver_attitude,
            'disability_level' => $this->disability_level,
        ]);

        $query->andFilterWhere(['like', 'child_code', $this->child_code])
            ->andFilterWhere(['like', 'factor_remark', $this->factor_remark])
            ->andFilterWhere(['like', 'age_remarks', $this->age_remarks])
            ->andFilterWhere(['like', 'child_attitude_rmk', $this->child_attitude_rmk])
            ->andFilterWhere(['like', 'caregiver_attitude_rmk', $this->caregiver_attitude_rmk])
            ->andFilterWhere(['like', 'disability_level_rmk', $this->disability_level_rmk])
            ->andFilterWhere(['like', 'kesho_kenya_rmk', $this->kesho_kenya_rmk])
            ->andFilterWhere(['like', 'kesho_staff_name', $this->kesho_staff_name])
            ->andFilterWhere(['like', 'vetting_comm_rmk', $this->vetting_comm_rmk])
            ->andFilterWhere(['like', 'chairperson_name', $this->chairperson_name]);

        return $dataProvider;
    }
}
