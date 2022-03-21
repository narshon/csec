<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NeedAssessmentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="need-assessment-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'fk_child') ?>

    <?= $form->field($model, 'location') ?>

    <?= $form->field($model, 'phone') ?>

    <?= $form->field($model, 'alive_status') ?>

    <?php // echo $form->field($model, 'mother') ?>

    <?php // echo $form->field($model, 'father') ?>

    <?php // echo $form->field($model, 'parent_stay_together') ?>

    <?php // echo $form->field($model, 'mother_county') ?>

    <?php // echo $form->field($model, 'mother_subcounty') ?>

    <?php // echo $form->field($model, 'mother_loc') ?>

    <?php // echo $form->field($model, 'mother_sub_loc') ?>

    <?php // echo $form->field($model, 'mother_village') ?>

    <?php // echo $form->field($model, 'father_county') ?>

    <?php // echo $form->field($model, 'father_subcounty') ?>

    <?php // echo $form->field($model, 'father_loc') ?>

    <?php // echo $form->field($model, 'father_subloc') ?>

    <?php // echo $form->field($model, 'father_village') ?>

    <?php // echo $form->field($model, 'current_health_condition') ?>

    <?php // echo $form->field($model, 'curr_health_cond_spec') ?>

    <?php // echo $form->field($model, 'chronic_health_cond') ?>

    <?php // echo $form->field($model, 'chhronic_health_spec') ?>

    <?php // echo $form->field($model, 'current_medication') ?>

    <?php // echo $form->field($model, 'current_medication_spec') ?>

    <?php // echo $form->field($model, 'immunized') ?>

    <?php // echo $form->field($model, 'immunized_reason') ?>

    <?php // echo $form->field($model, 'allergy') ?>

    <?php // echo $form->field($model, 'allergy_spec') ?>

    <?php // echo $form->field($model, 'feed_special_needs') ?>

    <?php // echo $form->field($model, 'prev_school_attended') ?>

    <?php // echo $form->field($model, 'prev_school') ?>

    <?php // echo $form->field($model, 'current_school_attend') ?>

    <?php // echo $form->field($model, 'current_school_name') ?>

    <?php // echo $form->field($model, 'current_edu_level') ?>

    <?php // echo $form->field($model, 'current_edu_level_class') ?>

    <?php // echo $form->field($model, 'child_friend_activity') ?>

    <?php // echo $form->field($model, 'child_friend_views') ?>

    <?php // echo $form->field($model, 'child_friend_quality') ?>

    <?php // echo $form->field($model, 'child_friend_age') ?>

    <?php // echo $form->field($model, 'signs_of_violence') ?>

    <?php // echo $form->field($model, 'family_abuse') ?>

    <?php // echo $form->field($model, 'community_abuse') ?>

    <?php // echo $form->field($model, 'admin_office') ?>

    <?php // echo $form->field($model, 'household_condition') ?>

    <?php // echo $form->field($model, 'where_family_comm_live') ?>

    <?php // echo $form->field($model, 'community_culture_connect') ?>

    <?php // echo $form->field($model, 'family_social_connect') ?>

    <?php // echo $form->field($model, 'social_connect_example') ?>

    <?php // echo $form->field($model, 'family_close_prox') ?>

    <?php // echo $form->field($model, 'family_relation_extended') ?>

    <?php // echo $form->field($model, 'family_relation_neighbor') ?>

    <?php // echo $form->field($model, 'acceptance_level_child') ?>

    <?php // echo $form->field($model, 'local_leader') ?>

    <?php // echo $form->field($model, 'conflict_family') ?>

    <?php // echo $form->field($model, 'conflict_family_spec') ?>

    <?php // echo $form->field($model, 'mental_health_concern') ?>

    <?php // echo $form->field($model, 'mental_health_spec') ?>

    <?php // echo $form->field($model, 'family_sig_life_event') ?>

    <?php // echo $form->field($model, 'family_sig_life_spec') ?>

    <?php // echo $form->field($model, 'pos_neg_events') ?>

    <?php // echo $form->field($model, 'adults_relationship') ?>

    <?php // echo $form->field($model, 'children_caregiver_relation') ?>

    <?php // echo $form->field($model, 'children_caregiver_confide') ?>

    <?php // echo $form->field($model, 'children_caregiver_confide_spec') ?>

    <?php // echo $form->field($model, 'children_caregiver_comfort') ?>

    <?php // echo $form->field($model, 'children_caregiver_comfort_spec') ?>

    <?php // echo $form->field($model, 'children_caregiver_react') ?>

    <?php // echo $form->field($model, 'children_caregiver_react_spec') ?>

    <?php // echo $form->field($model, 'children_caregiver_time') ?>

    <?php // echo $form->field($model, 'children_caregiver_time_spec') ?>

    <?php // echo $form->field($model, 'children_caregiver_communication') ?>

    <?php // echo $form->field($model, 'children_caregiver_encourage') ?>

    <?php // echo $form->field($model, 'children_caregiver_misbehaviour') ?>

    <?php // echo $form->field($model, 'children_caregiver_free') ?>

    <?php // echo $form->field($model, 'children_caregiver_decision') ?>

    <?php // echo $form->field($model, 'child_curr_caregiver_attach') ?>

    <?php // echo $form->field($model, 'curr_caregiver_relation') ?>

    <?php // echo $form->field($model, 'child_prev_caregiver_attach') ?>

    <?php // echo $form->field($model, 'child_prev_caregiver_relation') ?>

    <?php // echo $form->field($model, 'self_harm') ?>

    <?php // echo $form->field($model, 'known_history_abuse') ?>

    <?php // echo $form->field($model, 'inaprop_sex_behaviour') ?>

    <?php // echo $form->field($model, 'drug_abuse') ?>

    <?php // echo $form->field($model, 'abuse_symptom') ?>

    <?php // echo $form->field($model, 'emotional_distress') ?>

    <?php // echo $form->field($model, 'risk') ?>

    <?php // echo $form->field($model, 'behaviour_change') ?>

    <?php // echo $form->field($model, 'daily_routine') ?>

    <?php // echo $form->field($model, 'independence') ?>

    <?php // echo $form->field($model, 'like') ?>

    <?php // echo $form->field($model, 'dislike') ?>

    <?php // echo $form->field($model, 'fear') ?>

    <?php // echo $form->field($model, 'skill') ?>

    <?php // echo $form->field($model, 'strength_resource') ?>

    <?php // echo $form->field($model, 'need_concern') ?>

    <?php // echo $form->field($model, 'aditional_observ') ?>

    <?php // echo $form->field($model, 'things_achieve') ?>

    <?php // echo $form->field($model, 'family_marriage_status') ?>

    <?php // echo $form->field($model, 'family_reason_separation') ?>

    <?php // echo $form->field($model, 'family_placement_child') ?>

    <?php // echo $form->field($model, 'family_child_school') ?>

    <?php // echo $form->field($model, 'family_other_siblings_school') ?>

    <?php // echo $form->field($model, 'meal_per_day') ?>

    <?php // echo $form->field($model, 'food_variety_consumed') ?>

    <?php // echo $form->field($model, 'food_source') ?>

    <?php // echo $form->field($model, 'source_reliability') ?>

    <?php // echo $form->field($model, 'latrine') ?>

    <?php // echo $form->field($model, 'clean_water_access') ?>

    <?php // echo $form->field($model, 'home_environ') ?>

    <?php // echo $form->field($model, 'bath_arrangement') ?>

    <?php // echo $form->field($model, 'sanitary') ?>

    <?php // echo $form->field($model, 'health_service') ?>

    <?php // echo $form->field($model, 'medical_insurance') ?>

    <?php // echo $form->field($model, 'member_chronic_illness') ?>

    <?php // echo $form->field($model, 'which_member') ?>

    <?php // echo $form->field($model, 'chronic_illness_type') ?>

    <?php // echo $form->field($model, 'dificulty_seeing') ?>

    <?php // echo $form->field($model, 'difficulty_hearing') ?>

    <?php // echo $form->field($model, 'difficulty_walking') ?>

    <?php // echo $form->field($model, 'dificulty_remembering') ?>

    <?php // echo $form->field($model, 'dificulty_self_care') ?>

    <?php // echo $form->field($model, 'difficulty_communicating') ?>

    <?php // echo $form->field($model, 'child_disability_care') ?>

    <?php // echo $form->field($model, 'household_additional_support') ?>

    <?php // echo $form->field($model, 'household_additional_support_spec') ?>

    <?php // echo $form->field($model, 'rel_cult_health_access') ?>

    <?php // echo $form->field($model, 'rel_cult_health_access_spec') ?>

    <?php // echo $form->field($model, 'community_services') ?>

    <?php // echo $form->field($model, 'community_services_access') ?>

    <?php // echo $form->field($model, 'education_facilities') ?>

    <?php // echo $form->field($model, 'school_type') ?>

    <?php // echo $form->field($model, 'school_unique_needs') ?>

    <?php // echo $form->field($model, 'school_unique_needs_spec') ?>

    <?php // echo $form->field($model, 'school_household_attending') ?>

    <?php // echo $form->field($model, 'school_household_capacity') ?>

    <?php // echo $form->field($model, 'education_caregiver_interest') ?>

    <?php // echo $form->field($model, 'economic_activity_household') ?>

    <?php // echo $form->field($model, 'employment_type') ?>

    <?php // echo $form->field($model, 'income_month') ?>

    <?php // echo $form->field($model, 'fin_mat_support_outside') ?>

    <?php // echo $form->field($model, 'fin_mat_support_out_spec') ?>

    <?php // echo $form->field($model, 'assets_owned_family') ?>

    <?php // echo $form->field($model, 'child_support') ?>

    <?php // echo $form->field($model, 'recomendation') ?>

    <?php // echo $form->field($model, 'other_infor') ?>

    <?php // echo $form->field($model, 'support_needed') ?>

    <?php // echo $form->field($model, 'other') ?>

    <?php // echo $form->field($model, 'case_worker_name') ?>

    <?php // echo $form->field($model, 'case_manager_name') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
