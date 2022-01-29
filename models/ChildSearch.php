<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Child;

/**
 * ChildSearch represents the model behind the search form of `app\models\Child`.
 */
class ChildSearch extends Child
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'fk_consent', 'age', 'child_school_attendance', 'meal_per_day', 'fwife_number', 'sibling_no', 'sibling_order_9_15', 'sibling_order_16_20', 'sibling_order_21_25', 'sibling_order_26_30', 'sibling_order_31_35', 'sibling_order_35_above', 'father_contact', 'mother_contact', 'caregiver_contact', 'other_name_contact', 'fmember_income_no', 'income_regularity', 'household_indebt', 'household_assets', 'household_tools', 'exploit_month', 'exploit_year', 'exploit_reported', 'exploit_reported_to', 'caregiver_interview_contact', 'kesho_staff_contact'], 'integer'],
            [['interview_date', 'child_support_other', 'child_support_org', 'child_support_service', 'child_name', 'gender', 'dob', 'disability', 'school_name', 'child_educ_level', 'class', 'country', 'sub_county', 'location', 'landmark', 'landmark_name', 'not_regular_reason', 'child_chronic_ill', 'child_chronic_ill_spec', 'fmember_chronic_ill', 'fmember_chronic_ill_spec', 'parent_alive', 'who_alive', 'stay_together', 'child_live_with', 'father_name', 'mother_name', 'caregiver_name', 'other_name', 'hhold_educ_level', 'sex_exploit', 'exploit_happen_when', 'exploit_continue', 'exploit_rpt_to_spec', 'exploit_notreported_reason', 'other_detail', 'child_init', 'caregiver_interview_name', 'caregiver_interview_date', 'kesho_staff_name', 'kesho_staff_interview_date', 'kesho_designation'], 'safe'],
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
        $query = Child::find();

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
            'fk_consent' => $this->fk_consent,
            'interview_date' => $this->interview_date,
            'dob' => $this->dob,
            'age' => $this->age,
            'child_school_attendance' => $this->child_school_attendance,
            'meal_per_day' => $this->meal_per_day,
            'fwife_number' => $this->fwife_number,
            'sibling_no' => $this->sibling_no,
            'sibling_order_9_15' => $this->sibling_order_9_15,
            'sibling_order_16_20' => $this->sibling_order_16_20,
            'sibling_order_21_25' => $this->sibling_order_21_25,
            'sibling_order_26_30' => $this->sibling_order_26_30,
            'sibling_order_31_35' => $this->sibling_order_31_35,
            'sibling_order_35_above' => $this->sibling_order_35_above,
            'father_contact' => $this->father_contact,
            'mother_contact' => $this->mother_contact,
            'caregiver_contact' => $this->caregiver_contact,
            'other_name_contact' => $this->other_name_contact,
            'fmember_income_no' => $this->fmember_income_no,
            'income_regularity' => $this->income_regularity,
            'household_indebt' => $this->household_indebt,
            'household_assets' => $this->household_assets,
            'household_tools' => $this->household_tools,
            'exploit_month' => $this->exploit_month,
            'exploit_year' => $this->exploit_year,
            'exploit_reported' => $this->exploit_reported,
            'exploit_reported_to' => $this->exploit_reported_to,
            'caregiver_interview_contact' => $this->caregiver_interview_contact,
            'caregiver_interview_date' => $this->caregiver_interview_date,
            'kesho_staff_contact' => $this->kesho_staff_contact,
            'kesho_staff_interview_date' => $this->kesho_staff_interview_date,
        ]);

        $query->andFilterWhere(['like', 'child_support_other', $this->child_support_other])
            ->andFilterWhere(['like', 'child_support_org', $this->child_support_org])
            ->andFilterWhere(['like', 'child_support_service', $this->child_support_service])
            ->andFilterWhere(['like', 'child_name', $this->child_name])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'disability', $this->disability])
            ->andFilterWhere(['like', 'school_name', $this->school_name])
            ->andFilterWhere(['like', 'child_educ_level', $this->child_educ_level])
            ->andFilterWhere(['like', 'class', $this->class])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'sub_county', $this->sub_county])
            ->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'landmark', $this->landmark])
            ->andFilterWhere(['like', 'landmark_name', $this->landmark_name])
            ->andFilterWhere(['like', 'not_regular_reason', $this->not_regular_reason])
            ->andFilterWhere(['like', 'child_chronic_ill', $this->child_chronic_ill])
            ->andFilterWhere(['like', 'child_chronic_ill_spec', $this->child_chronic_ill_spec])
            ->andFilterWhere(['like', 'fmember_chronic_ill', $this->fmember_chronic_ill])
            ->andFilterWhere(['like', 'fmember_chronic_ill_spec', $this->fmember_chronic_ill_spec])
            ->andFilterWhere(['like', 'parent_alive', $this->parent_alive])
            ->andFilterWhere(['like', 'who_alive', $this->who_alive])
            ->andFilterWhere(['like', 'stay_together', $this->stay_together])
            ->andFilterWhere(['like', 'child_live_with', $this->child_live_with])
            ->andFilterWhere(['like', 'father_name', $this->father_name])
            ->andFilterWhere(['like', 'mother_name', $this->mother_name])
            ->andFilterWhere(['like', 'caregiver_name', $this->caregiver_name])
            ->andFilterWhere(['like', 'other_name', $this->other_name])
            ->andFilterWhere(['like', 'hhold_educ_level', $this->hhold_educ_level])
            ->andFilterWhere(['like', 'sex_exploit', $this->sex_exploit])
            ->andFilterWhere(['like', 'exploit_happen_when', $this->exploit_happen_when])
            ->andFilterWhere(['like', 'exploit_continue', $this->exploit_continue])
            ->andFilterWhere(['like', 'exploit_rpt_to_spec', $this->exploit_rpt_to_spec])
            ->andFilterWhere(['like', 'exploit_notreported_reason', $this->exploit_notreported_reason])
            ->andFilterWhere(['like', 'other_detail', $this->other_detail])
            ->andFilterWhere(['like', 'child_init', $this->child_init])
            ->andFilterWhere(['like', 'caregiver_interview_name', $this->caregiver_interview_name])
            ->andFilterWhere(['like', 'kesho_staff_name', $this->kesho_staff_name])
            ->andFilterWhere(['like', 'kesho_designation', $this->kesho_designation]);

        return $dataProvider;
    }
}
