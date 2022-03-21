<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NeedAssessment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="need-assessment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fk_child')->textInput() ?>

    <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alive_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mother')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'father')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parent_stay_together')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mother_county')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mother_subcounty')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mother_loc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mother_sub_loc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mother_village')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'father_county')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'father_subcounty')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'father_loc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'father_subloc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'father_village')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'current_health_condition')->textInput() ?>

    <?= $form->field($model, 'curr_health_cond_spec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'chronic_health_cond')->textInput() ?>

    <?= $form->field($model, 'chhronic_health_spec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'current_medication')->textInput() ?>

    <?= $form->field($model, 'current_medication_spec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'immunized')->textInput() ?>

    <?= $form->field($model, 'immunized_reason')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'allergy')->textInput() ?>

    <?= $form->field($model, 'allergy_spec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'feed_special_needs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prev_school_attended')->textInput() ?>

    <?= $form->field($model, 'prev_school')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'current_school_attend')->textInput() ?>

    <?= $form->field($model, 'current_school_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'current_edu_level')->textInput() ?>

    <?= $form->field($model, 'current_edu_level_class')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'child_friend_activity')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'child_friend_views')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'child_friend_quality')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'child_friend_age')->textInput() ?>

    <?= $form->field($model, 'signs_of_violence')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'family_abuse')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'community_abuse')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'admin_office')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'household_condition')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'where_family_comm_live')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'community_culture_connect')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'family_social_connect')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'social_connect_example')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'family_close_prox')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'family_relation_extended')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'family_relation_neighbor')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'acceptance_level_child')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'local_leader')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'conflict_family')->textInput() ?>

    <?= $form->field($model, 'conflict_family_spec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mental_health_concern')->textInput() ?>

    <?= $form->field($model, 'mental_health_spec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'family_sig_life_event')->textInput() ?>

    <?= $form->field($model, 'family_sig_life_spec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pos_neg_events')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adults_relationship')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'children_caregiver_relation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'children_caregiver_confide')->textInput() ?>

    <?= $form->field($model, 'children_caregiver_confide_spec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'children_caregiver_comfort')->textInput() ?>

    <?= $form->field($model, 'children_caregiver_comfort_spec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'children_caregiver_react')->textInput() ?>

    <?= $form->field($model, 'children_caregiver_react_spec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'children_caregiver_time')->textInput() ?>

    <?= $form->field($model, 'children_caregiver_time_spec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'children_caregiver_communication')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'children_caregiver_encourage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'children_caregiver_misbehaviour')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'children_caregiver_free')->textInput() ?>

    <?= $form->field($model, 'children_caregiver_decision')->textInput() ?>

    <?= $form->field($model, 'child_curr_caregiver_attach')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'curr_caregiver_relation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'child_prev_caregiver_attach')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'child_prev_caregiver_relation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'self_harm')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'known_history_abuse')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inaprop_sex_behaviour')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'drug_abuse')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'abuse_symptom')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emotional_distress')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'risk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'behaviour_change')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'daily_routine')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'independence')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'like')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dislike')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fear')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'skill')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'strength_resource')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'need_concern')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aditional_observ')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'things_achieve')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'family_marriage_status')->textInput() ?>

    <?= $form->field($model, 'family_reason_separation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'family_placement_child')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'family_child_school')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'family_other_siblings_school')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meal_per_day')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'food_variety_consumed')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'food_source')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'source_reliability')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'latrine')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'clean_water_access')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'home_environ')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bath_arrangement')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sanitary')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'health_service')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'medical_insurance')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'member_chronic_illness')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'which_member')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'chronic_illness_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dificulty_seeing')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'difficulty_hearing')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'difficulty_walking')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dificulty_remembering')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dificulty_self_care')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'difficulty_communicating')->textInput() ?>

    <?= $form->field($model, 'child_disability_care')->textInput() ?>

    <?= $form->field($model, 'household_additional_support')->textInput() ?>

    <?= $form->field($model, 'household_additional_support_spec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rel_cult_health_access')->textInput() ?>

    <?= $form->field($model, 'rel_cult_health_access_spec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'community_services')->textInput() ?>

    <?= $form->field($model, 'community_services_access')->textInput() ?>

    <?= $form->field($model, 'education_facilities')->textInput() ?>

    <?= $form->field($model, 'school_type')->textInput() ?>

    <?= $form->field($model, 'school_unique_needs')->textInput() ?>

    <?= $form->field($model, 'school_unique_needs_spec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'school_household_attending')->textInput() ?>

    <?= $form->field($model, 'school_household_capacity')->textInput() ?>

    <?= $form->field($model, 'education_caregiver_interest')->textInput() ?>

    <?= $form->field($model, 'economic_activity_household')->textInput() ?>

    <?= $form->field($model, 'employment_type')->textInput() ?>

    <?= $form->field($model, 'income_month')->textInput() ?>

    <?= $form->field($model, 'fin_mat_support_outside')->textInput() ?>

    <?= $form->field($model, 'fin_mat_support_out_spec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'assets_owned_family')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'child_support')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'other_infor')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'support_needed')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'other')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'recomendation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'case_worker_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'case_manager_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
