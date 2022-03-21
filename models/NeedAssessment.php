<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%need_assessment}}".
 *
 * @property int $id
 * @property int $fk_child
 * @property string $location
 * @property string $phone
 * @property string $alive_status
 * @property string $mother
 * @property string $father
 * @property string $parent_stay_together
 * @property string $mother_county
 * @property string $mother_subcounty
 * @property string $mother_loc
 * @property string $mother_sub_loc
 * @property string $mother_village
 * @property string $father_county
 * @property string $father_subcounty
 * @property string $father_loc
 * @property string $father_subloc
 * @property string $father_village
 * @property int $current_health_condition
 * @property string $curr_health_cond_spec
 * @property int $chronic_health_cond
 * @property string $chhronic_health_spec
 * @property int $current_medication
 * @property string $current_medication_spec
 * @property int $immunized
 * @property string $immunized_reason
 * @property int $allergy
 * @property string $allergy_spec
 * @property string $feed_special_needs
 * @property int $prev_school_attended
 * @property string $prev_school
 * @property int $current_school_attend
 * @property string $current_school_name
 * @property int $current_edu_level
 * @property string $current_edu_level_class
 * @property string $child_friend_activity
 * @property string $child_friend_views
 * @property string $child_friend_quality
 * @property int $child_friend_age
 * @property string $signs_of_violence
 * @property string $family_abuse
 * @property string $community_abuse
 * @property string $admin_office
 * @property string $household_condition
 * @property string $where_family_comm_live
 * @property string $community_culture_connect
 * @property string $family_social_connect
 * @property string $social_connect_example
 * @property string $family_close_prox
 * @property string $family_relation_extended
 * @property string $family_relation_neighbor
 * @property string $acceptance_level_child
 * @property string $local_leader
 * @property int $conflict_family
 * @property string $conflict_family_spec
 * @property int $mental_health_concern
 * @property string $mental_health_spec
 * @property int $family_sig_life_event
 * @property string $family_sig_life_spec
 * @property string $pos_neg_events
 * @property string $adults_relationship
 * @property string $children_caregiver_relation
 * @property int $children_caregiver_confide
 * @property string $children_caregiver_confide_spec
 * @property int $children_caregiver_comfort
 * @property string $children_caregiver_comfort_spec
 * @property int $children_caregiver_react
 * @property string $children_caregiver_react_spec
 * @property int $children_caregiver_time
 * @property string $children_caregiver_time_spec
 * @property string $children_caregiver_communication
 * @property string $children_caregiver_encourage
 * @property string $children_caregiver_misbehaviour
 * @property int $children_caregiver_free
 * @property int $children_caregiver_decision
 * @property string $child_curr_caregiver_attach
 * @property string $curr_caregiver_relation
 * @property string $child_prev_caregiver_attach
 * @property string $child_prev_caregiver_relation
 * @property string $self_harm
 * @property string $known_history_abuse
 * @property string $inaprop_sex_behaviour
 * @property string $drug_abuse
 * @property string $abuse_symptom
 * @property string $emotional_distress
 * @property string $risk
 * @property string $behaviour_change
 * @property string $daily_routine
 * @property string $independence
 * @property string $like
 * @property string $dislike
 * @property string $fear
 * @property string $skill
 * @property string $strength_resource
 * @property string $need_concern
 * @property string $aditional_observ
 * @property string $things_achieve
 * @property int $family_marriage_status
 * @property string $family_reason_separation
 * @property string $family_placement_child
 * @property string $family_child_school
 * @property string $family_other_siblings_school
 * @property string $meal_per_day
 * @property string $food_variety_consumed
 * @property string $food_source
 * @property string $source_reliability
 * @property string $latrine
 * @property string $clean_water_access
 * @property string $home_environ
 * @property string $bath_arrangement
 * @property string $sanitary
 * @property string $health_service
 * @property string $medical_insurance
 * @property string $member_chronic_illness
 * @property string $which_member
 * @property string $chronic_illness_type
 * @property string $dificulty_seeing
 * @property string $difficulty_hearing
 * @property string $difficulty_walking
 * @property string $dificulty_remembering
 * @property string $dificulty_self_care
 * @property int $difficulty_communicating
 * @property int $child_disability_care
 * @property int $household_additional_support
 * @property string $household_additional_support_spec
 * @property int $rel_cult_health_access
 * @property string $rel_cult_health_access_spec
 * @property int $community_services
 * @property int $community_services_access
 * @property int $education_facilities
 * @property int $school_type
 * @property int $school_unique_needs
 * @property string $school_unique_needs_spec
 * @property int $school_household_attending
 * @property int $school_household_capacity
 * @property int $education_caregiver_interest
 * @property int $economic_activity_household
 * @property int $employment_type
 * @property int $income_month
 * @property int $fin_mat_support_outside
 * @property string $fin_mat_support_out_spec
 * @property string $assets_owned_family
 * @property string $child_support
 * @property string $recomendation
 * @property string $other_infor
 * @property string $support_needed
 * @property string $other
 * @property string $case_worker_name
 * @property string $case_manager_name
 *
 * @property Child $fkChild
 */
class NeedAssessment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%need_assessment}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fk_child', 'current_health_condition', 'chronic_health_cond', 'current_medication', 'immunized', 'allergy', 'prev_school_attended', 'current_school_attend', 'current_edu_level', 'child_friend_age', 'conflict_family', 'mental_health_concern', 'family_sig_life_event', 'children_caregiver_confide', 'children_caregiver_comfort', 'children_caregiver_react', 'children_caregiver_time', 'children_caregiver_free', 'children_caregiver_decision', 'family_marriage_status', 'difficulty_communicating', 'child_disability_care', 'household_additional_support', 'rel_cult_health_access', 'community_services', 'community_services_access', 'education_facilities', 'school_type', 'school_unique_needs', 'school_household_attending', 'school_household_capacity', 'education_caregiver_interest', 'economic_activity_household', 'employment_type', 'income_month', 'fin_mat_support_outside'], 'integer'],
            [['child_friend_activity', 'signs_of_violence', 'family_abuse', 'community_abuse', 'where_family_comm_live', 'social_connect_example', 'family_relation_extended', 'family_relation_neighbor', 'acceptance_level_child', 'other_infor', 'support_needed', 'other'], 'string'],
            [['location', 'feed_special_needs', 'prev_school', 'current_school_name', 'child_friend_views', 'child_friend_quality', 'conflict_family_spec', 'pos_neg_events', 'adults_relationship', 'children_caregiver_relation', 'children_caregiver_communication', 'children_caregiver_encourage', 'children_caregiver_misbehaviour', 'aditional_observ', 'family_reason_separation', 'family_placement_child', 'family_child_school', 'family_other_siblings_school', 'household_additional_support_spec', 'school_unique_needs_spec', 'assets_owned_family'], 'string', 'max' => 200],
            [['phone', 'community_culture_connect', 'family_social_connect', 'family_close_prox', 'local_leader', 'meal_per_day', 'health_service', 'medical_insurance', 'member_chronic_illness'], 'string', 'max' => 20],
            [['alive_status', 'parent_stay_together'], 'string', 'max' => 10],
            [['mother', 'father', 'mother_county', 'mother_subcounty', 'mother_loc', 'mother_sub_loc', 'mother_village', 'father_county', 'father_subcounty', 'father_loc', 'father_subloc', 'father_village', 'curr_health_cond_spec', 'chhronic_health_spec', 'current_medication_spec', 'immunized_reason', 'allergy_spec', 'current_edu_level_class', 'mental_health_spec', 'family_sig_life_spec', 'children_caregiver_confide_spec', 'children_caregiver_comfort_spec', 'children_caregiver_react_spec', 'children_caregiver_time_spec', 'self_harm', 'known_history_abuse', 'inaprop_sex_behaviour', 'drug_abuse', 'abuse_symptom', 'emotional_distress', 'risk', 'behaviour_change', 'daily_routine', 'independence', 'like', 'dislike', 'fear', 'skill', 'strength_resource', 'need_concern', 'things_achieve', 'source_reliability', 'latrine', 'clean_water_access', 'home_environ', 'bath_arrangement', 'sanitary', 'which_member', 'chronic_illness_type', 'dificulty_seeing', 'difficulty_hearing', 'difficulty_walking', 'dificulty_remembering', 'dificulty_self_care', 'rel_cult_health_access_spec', 'fin_mat_support_out_spec', 'child_support', 'recomendation', 'case_worker_name', 'case_manager_name'], 'string', 'max' => 100],
            [['admin_office', 'household_condition', 'child_curr_caregiver_attach', 'curr_caregiver_relation', 'child_prev_caregiver_attach', 'child_prev_caregiver_relation', 'food_variety_consumed', 'food_source'], 'string', 'max' => 50],
            [['fk_child'], 'exist', 'skipOnError' => true, 'targetClass' => Child::className(), 'targetAttribute' => ['fk_child' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fk_child' => 'Fk Child',
            'location' => 'Location',
            'phone' => 'Phone',
            'alive_status' => 'Alive Status',
            'mother' => 'Mother',
            'father' => 'Father',
            'parent_stay_together' => 'Parent Stay Together',
            'mother_county' => 'Mother County',
            'mother_subcounty' => 'Mother Subcounty',
            'mother_loc' => 'Mother Loc',
            'mother_sub_loc' => 'Mother Sub Loc',
            'mother_village' => 'Mother Village',
            'father_county' => 'Father County',
            'father_subcounty' => 'Father Subcounty',
            'father_loc' => 'Father Loc',
            'father_subloc' => 'Father Subloc',
            'father_village' => 'Father Village',
            'current_health_condition' => 'Current Health Condition',
            'curr_health_cond_spec' => 'Curr Health Cond Spec',
            'chronic_health_cond' => 'Chronic Health Cond',
            'chhronic_health_spec' => 'Chhronic Health Spec',
            'current_medication' => 'Current Medication',
            'current_medication_spec' => 'Current Medication Spec',
            'immunized' => 'Immunized',
            'immunized_reason' => 'Immunized Reason',
            'allergy' => 'Allergy',
            'allergy_spec' => 'Allergy Spec',
            'feed_special_needs' => 'Feed Special Needs',
            'prev_school_attended' => 'Prev School Attended',
            'prev_school' => 'Prev School',
            'current_school_attend' => 'Current School Attend',
            'current_school_name' => 'Current School Name',
            'current_edu_level' => 'Current Edu Level',
            'current_edu_level_class' => 'Current Edu Level Class',
            'child_friend_activity' => 'Child Friend Activity',
            'child_friend_views' => 'Child Friend Views',
            'child_friend_quality' => 'Child Friend Quality',
            'child_friend_age' => 'Child Friend Age',
            'signs_of_violence' => 'Signs Of Violence',
            'family_abuse' => 'Family Abuse',
            'community_abuse' => 'Community Abuse',
            'admin_office' => 'Admin Office',
            'household_condition' => 'Household Condition',
            'where_family_comm_live' => 'Where Family Comm Live',
            'community_culture_connect' => 'Community Culture Connect',
            'family_social_connect' => 'Family Social Connect',
            'social_connect_example' => 'Social Connect Example',
            'family_close_prox' => 'Family Close Prox',
            'family_relation_extended' => 'Family Relation Extended',
            'family_relation_neighbor' => 'Family Relation Neighbor',
            'acceptance_level_child' => 'Acceptance Level Child',
            'local_leader' => 'Local Leader',
            'conflict_family' => 'Conflict Family',
            'conflict_family_spec' => 'Conflict Family Spec',
            'mental_health_concern' => 'Mental Health Concern',
            'mental_health_spec' => 'Mental Health Spec',
            'family_sig_life_event' => 'Family Sig Life Event',
            'family_sig_life_spec' => 'Family Sig Life Spec',
            'pos_neg_events' => 'Pos Neg Events',
            'adults_relationship' => 'Adults Relationship',
            'children_caregiver_relation' => 'Children Caregiver Relation',
            'children_caregiver_confide' => 'Children Caregiver Confide',
            'children_caregiver_confide_spec' => 'Children Caregiver Confide Spec',
            'children_caregiver_comfort' => 'Children Caregiver Comfort',
            'children_caregiver_comfort_spec' => 'Children Caregiver Comfort Spec',
            'children_caregiver_react' => 'Children Caregiver React',
            'children_caregiver_react_spec' => 'Children Caregiver React Spec',
            'children_caregiver_time' => 'Children Caregiver Time',
            'children_caregiver_time_spec' => 'Children Caregiver Time Spec',
            'children_caregiver_communication' => 'Children Caregiver Communication',
            'children_caregiver_encourage' => 'Children Caregiver Encourage',
            'children_caregiver_misbehaviour' => 'Children Caregiver Misbehaviour',
            'children_caregiver_free' => 'Children Caregiver Free',
            'children_caregiver_decision' => 'Children Caregiver Decision',
            'child_curr_caregiver_attach' => 'Child Curr Caregiver Attach',
            'curr_caregiver_relation' => 'Curr Caregiver Relation',
            'child_prev_caregiver_attach' => 'Child Prev Caregiver Attach',
            'child_prev_caregiver_relation' => 'Child Prev Caregiver Relation',
            'self_harm' => 'Self Harm',
            'known_history_abuse' => 'Known History Abuse',
            'inaprop_sex_behaviour' => 'Inaprop Sex Behaviour',
            'drug_abuse' => 'Drug Abuse',
            'abuse_symptom' => 'Abuse Symptom',
            'emotional_distress' => 'Emotional Distress',
            'risk' => 'Risk',
            'behaviour_change' => 'Behaviour Change',
            'daily_routine' => 'Daily Routine',
            'independence' => 'Independence',
            'like' => 'Like',
            'dislike' => 'Dislike',
            'fear' => 'Fear',
            'skill' => 'Skill',
            'strength_resource' => 'Strength Resource',
            'need_concern' => 'Need Concern',
            'aditional_observ' => 'Aditional Observ',
            'things_achieve' => 'Things Achieve',
            'family_marriage_status' => 'Family Marriage Status',
            'family_reason_separation' => 'Family Reason Separation',
            'family_placement_child' => 'Family Placement Child',
            'family_child_school' => 'Family Child School',
            'family_other_siblings_school' => 'Family Other Siblings School',
            'meal_per_day' => 'Meal Per Day',
            'food_variety_consumed' => 'Food Variety Consumed',
            'food_source' => 'Food Source',
            'source_reliability' => 'Source Reliability',
            'latrine' => 'Latrine',
            'clean_water_access' => 'Clean Water Access',
            'home_environ' => 'Home Environ',
            'bath_arrangement' => 'Bath Arrangement',
            'sanitary' => 'Sanitary',
            'health_service' => 'Health Service',
            'medical_insurance' => 'Medical Insurance',
            'member_chronic_illness' => 'Member Chronic Illness',
            'which_member' => 'Which Member',
            'chronic_illness_type' => 'Chronic Illness Type',
            'dificulty_seeing' => 'Dificulty Seeing',
            'difficulty_hearing' => 'Difficulty Hearing',
            'difficulty_walking' => 'Difficulty Walking',
            'dificulty_remembering' => 'Dificulty Remembering',
            'dificulty_self_care' => 'Dificulty Self Care',
            'difficulty_communicating' => 'Difficulty Communicating',
            'child_disability_care' => 'Child Disability Care',
            'household_additional_support' => 'Household Additional Support',
            'household_additional_support_spec' => 'Household Additional Support Spec',
            'rel_cult_health_access' => 'Rel Cult Health Access',
            'rel_cult_health_access_spec' => 'Rel Cult Health Access Spec',
            'community_services' => 'Community Services',
            'community_services_access' => 'Community Services Access',
            'education_facilities' => 'Education Facilities',
            'school_type' => 'School Type',
            'school_unique_needs' => 'School Unique Needs',
            'school_unique_needs_spec' => 'School Unique Needs Spec',
            'school_household_attending' => 'School Household Attending',
            'school_household_capacity' => 'School Household Capacity',
            'education_caregiver_interest' => 'Education Caregiver Interest',
            'economic_activity_household' => 'Economic Activity Household',
            'employment_type' => 'Employment Type',
            'income_month' => 'Income Month',
            'fin_mat_support_outside' => 'Fin Mat Support Outside',
            'fin_mat_support_out_spec' => 'Fin Mat Support Out Spec',
            'assets_owned_family' => 'Assets Owned Family',
            'child_support' => 'Child Support',
            'recomendation' => 'Recomendation',
            'other_infor' => 'Other Infor',
            'support_needed' => 'Support Needed',
            'other' => 'Other',
            'case_worker_name' => 'Case Worker Name',
            'case_manager_name' => 'Case Manager Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkChild()
    {
        return $this->hasOne(Child::className(), ['id' => 'fk_child']);
    }

    /**
     * {@inheritdoc}
     * @return NeedAssessmentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new NeedAssessmentQuery(get_called_class());
    }
}
