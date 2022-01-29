<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SchoolVisit;

/**
 * SchoolVisitSearch represents the model behind the search form of `app\models\SchoolVisit`.
 */
class SchoolVisitSearch extends SchoolVisit
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'fk_child', 'reg_days_no', 'irreg_days_no'], 'integer'],
            [['visit_date', 'school_attendance', 'irreg_reasons', 'class_particip', 'passive_particip_reasons', 'student_dressing', 'academic_perfom', 'academic_perform_report', 'extra_curr_act', 'discipline_level', 'discipline_why', 'outstanding_act', 'area_concern', 'follow_up', 'student_comment', 'teacher_comment', 'staff_name', 'staff_designation'], 'safe'],
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
        $query = SchoolVisit::find();

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
            'visit_date' => $this->visit_date,
            'reg_days_no' => $this->reg_days_no,
            'irreg_days_no' => $this->irreg_days_no,
        ]);

        $query->andFilterWhere(['like', 'school_attendance', $this->school_attendance])
            ->andFilterWhere(['like', 'irreg_reasons', $this->irreg_reasons])
            ->andFilterWhere(['like', 'class_particip', $this->class_particip])
            ->andFilterWhere(['like', 'passive_particip_reasons', $this->passive_particip_reasons])
            ->andFilterWhere(['like', 'student_dressing', $this->student_dressing])
            ->andFilterWhere(['like', 'academic_perfom', $this->academic_perfom])
            ->andFilterWhere(['like', 'academic_perform_report', $this->academic_perform_report])
            ->andFilterWhere(['like', 'extra_curr_act', $this->extra_curr_act])
            ->andFilterWhere(['like', 'discipline_level', $this->discipline_level])
            ->andFilterWhere(['like', 'discipline_why', $this->discipline_why])
            ->andFilterWhere(['like', 'outstanding_act', $this->outstanding_act])
            ->andFilterWhere(['like', 'area_concern', $this->area_concern])
            ->andFilterWhere(['like', 'follow_up', $this->follow_up])
            ->andFilterWhere(['like', 'student_comment', $this->student_comment])
            ->andFilterWhere(['like', 'teacher_comment', $this->teacher_comment])
            ->andFilterWhere(['like', 'staff_name', $this->staff_name])
            ->andFilterWhere(['like', 'staff_designation', $this->staff_designation]);

        return $dataProvider;
    }
}
