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
            'location' => 'Last Known Location',
            'phone' => 'Phone no',
            'alive_status' => 'Alive (Y/N/Unknown)',
            'mother' => 'Mother',
            'father' => 'Father',
            'parent_stay_together' => 'Are mother and father living together?',
            'mother_county' => 'Mother County',
            'mother_subcounty' => 'Mother Subcounty',
            'mother_loc' => 'Mother Location',
            'mother_sub_loc' => 'Mother Sub Location',
            'mother_village' => 'Mother Village/Estate',
            'father_county' => 'Father County',
            'father_subcounty' => 'Father Subcounty',
            'father_loc' => 'Father Location',
            'father_subloc' => 'Father Sublocation',
            'father_village' => 'Father Village/Estate',
            'current_health_condition' => 'Any current health conditions?',
            'curr_health_cond_spec' => 'Specify',
            'chronic_health_cond' => 'Any chronic health conditions?',
            'chhronic_health_spec' => 'Specify',
            'current_medication' => 'Currently on any medication?',
            'current_medication_spec' => 'Current Medication Spec',
            'immunized' => 'Has the child been fully immunized?',
            'immunized_reason' => 'Immunized Reason',
            'allergy' => 'Any allergy',
            'allergy_spec' => 'Specify',
            'feed_special_needs' => 'Feeding routine and special needs',
            'prev_school_attended' => 'Previously attended any school?',
            'prev_school' => 'If yes, name and location of school',
            'current_school_attend' => 'Child currently attending school',
            'current_school_name' => 'If yes, name and location of school',
            'current_edu_level' => 'Current education level',
            'current_edu_level_class' => 'Class',
            'child_friend_activity' => 'Who are the child\'s friends? What kind of things do they do together? How often do they interact?',
            'child_friend_views' => 'What are the child\'s views of these peer friendships?',
            'child_friend_quality' => 'What is the quality of these friendships i.e. do they encourage positive or negative behaviour?',
            'child_friend_age' => 'Are the percieved friends much older, younger or same age?',
            'signs_of_violence' => 'Are there signs of violence (including harsh physical punishment), abuse or neglect in the home?',
            'family_abuse' => 'Are there signs/reports of drug/alcohol abuse in the family?',
            'community_abuse' => 'Are there concerns of potential violence or abuse in community or school environment?',
            'admin_office' => 'Is there an accessible local administrative office? (chief, assistant chief, village elder, nyumba kumi)',
            'household_condition' => 'Describe the condition of the household (i.e. level of safety, roof/wall/floor, ventilation, number of rooms?)',
            'where_family_comm_live' => 'Does the family live in a rented home/living on the land legal?',
            'community_culture_connect' => 'Does the family feel connected to the culture of the family?',
            'family_social_connect' => 'Does the family feel socially connected?',
            'social_connect_example' => 'Please provide example',
            'family_close_prox' => 'Does the family have relatives and/or friends living in close proximity?',
            'family_relation_extended' => 'Describe the family\'s relationship with their extended family(ies)?',
            'family_relation_neighbor' => 'Describe the family\'s relationship with neighbours',
            'acceptance_level_child' => 'Descrive the level of acceptance of relatives and the community towards the child',
            'local_leader' => 'Do local leaders know the family?',
            'conflict_family' => 'Are there signs of tension and/or conflict within family?',
            'conflict_family_spec' => 'Describe',
            'mental_health_concern' => 'Are there mental health concerns?',
            'mental_health_spec' => 'Describe',
            'family_sig_life_event' => 'Has the family been through a significant life event recently?',
            'family_sig_life_spec' => 'Describe',
            'pos_neg_events' => 'Describe both negative and positive events',
            'adults_relationship' => 'Describe the relationship between adults in the house?',
            'children_caregiver_relation' => 'How do the children currently living with caregiver? describe their relationship with caregiver?',
            'children_caregiver_confide' => 'Do the children confide with caregiver if having challenges?',
            'children_caregiver_confide_spec' => 'Describe',
            'children_caregiver_comfort' => 'Do the children seek comfort from caregiver?',
            'children_caregiver_comfort_spec' => 'Describe',
            'children_caregiver_react' => 'How do the children react when separated from caregiver?',
            'children_caregiver_react_spec' => 'Describe',
            'children_caregiver_time' => 'Does caregiver spend time with their caregiver?',
            'children_caregiver_time_spec' => 'Describe',
            'children_caregiver_communication' => 'Describe how the caregiver communicates with their children?',
            'children_caregiver_encourage' => 'Does the caregiver encourage the child positively?',
            'children_caregiver_misbehaviour' => 'How does a caregiver respond to a child\'s misbehaviour? (including type of discipline)',
            'children_caregiver_free' => 'Are the children free around the caregiver?',
            'children_caregiver_decision' => 'Are the children involved in decision on matters concerning them?',
            'child_curr_caregiver_attach' => 'Level of attachment between the child and current caregiver?',
            'curr_caregiver_relation' => 'Describe the relationship',
            'child_prev_caregiver_attach' => 'Level of attachment with previous primary caregiver?',
            'child_prev_caregiver_relation' => 'Describe the relationship',
            'self_harm' => 'Self Harm',
            'known_history_abuse' => 'Known History Abuse',
            'inaprop_sex_behaviour' => 'Inapropriate Sexual Behaviour',
            'drug_abuse' => 'Drug and/or substance abuse',
            'abuse_symptom' => 'Displays potential symptoms of abuse',
            'emotional_distress' => 'displays signs of emotional distress',
            'risk' => 'Exhibits Risk',
            'behaviour_change' => 'Any unexplained recent change in behaviour',
            'daily_routine' => 'Daily Routine',
            'independence' => 'Degree of independence (i.e. what can the child do for themselves and what help do they need?',
            'like' => 'Likes',
            'dislike' => 'Dislikes',
            'fear' => 'Fear',
            'skill' => 'Skills/Strengths',
            'strength_resource' => 'Strengths and Resources',
            'need_concern' => 'Needs or concerns',
            'aditional_observ' => 'Aditional Observations',
            'things_achieve' => 'Things to be achieved',
            'family_marriage_status' => 'Are mother and father (choose that apply)',
            'family_reason_separation' => 'If family of origin, what is the family\'s perspective on the reasons for the separation?',
            'family_placement_child' => 'How does this family/household feel about potential placement with the child',
            'family_child_school' => 'How does this family/household feel about the child remain/return in school or getting vocational skills?',
            'family_other_siblings_school' => 'Does the other siblings go to school? If no why?',
            'meal_per_day' => 'Number of meals per day',
            'food_variety_consumed' => 'Variety of food(s) consumed',
            'food_source' => 'Source of food',
            'source_reliability' => 'Reliability of source',
            'latrine' => 'Describe the latrine (shared, distance from house, pit/flush/none)',
            'clean_water_access' => 'Access to and source of clean water',
            'home_environ' => 'Describe the home environment (inside, outside and surrounding - cleanliness, size of the house, rooms, roof, walls and floor including materials used, ventilation)',
            'bath_arrangement' => 'Bathing arrangements/habits (including handwashing)',
            'sanitary' => 'Availability, disposal, knowledge of sanitary items',
            'health_service' => 'Does the family have access to the health services?',
            'medical_insurance' => 'Does the family have medical insurance?',
            'member_chronic_illness' => 'Is there any household member with chronic illness e.g. diabetes, hypertension?',
            'which_member' => 'If yes, who?',
            'chronic_illness_type' => 'What type?',
            'dificulty_seeing' => 'Has dificulty seeing, even if wearing glasses?',
            'difficulty_hearing' => 'Has difficulty hearing, even if using a hearing aid?',
            'difficulty_walking' => 'Has difficulty walking or climbing steps?',
            'dificulty_remembering' => 'Difficulty remembering or concentrating?',
            'dificulty_self_care' => 'Has difficulty (with self care) washing all over or dressing?',
            'difficulty_communicating' => 'Using your usual language, do you have difficulty communicating, (for example understanding or being understood by others)?',
            'child_disability_care' => 'Is household able to take care of child with disability (if child returning home has disability)?',
            'household_additional_support' => 'What type of additional support the household need?',
            'household_additional_support_spec' => 'Specify',
            'rel_cult_health_access' => 'Are there any religious/cultural practices that hinder/could hinder children from accessing health services?',
            'rel_cult_health_access_spec' => 'If yes, explain',
            'community_services' => 'Are there functional community services (choose all that apply)',
            'community_services_access' => 'Are these community services easily accessible?',
            'education_facilities' => 'Is there access to education facilities?',
            'school_type' => 'The school is',
            'school_unique_needs' => 'Is the school inclusive and able to meet unique needs of child?',
            'school_unique_needs_spec' => 'If no, describe child\'s unmet needs',
            'school_household_attending' => 'Are children in the household currently attending school?',
            'school_household_capacity' => 'If yes, is their class appropriate for their age and evolving capacity?',
            'education_caregiver_interest' => 'Do caregivers show interest in children\'s education?',
            'economic_activity_household' => 'How is household involved in economic activity?',
            'employment_type' => 'Type of employment',
            'income_month' => 'Estimated income per month',
            'fin_mat_support_outside' => 'Is there any financial/material support provided by people living outside of the household?',
            'fin_mat_support_out_spec' => 'If yes, who',
            'assets_owned_family' => 'Assets owned by family (please list all you can observe, incl. land)',
            'child_support' => 'Does the family want the child to be supported?',
            'recomendation' => 'Recomendation for child support',
            'other_infor' => 'What other information does the family need?',
            'support_needed' => 'What support do they need?',
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
