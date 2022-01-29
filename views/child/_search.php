<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ChildSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="child-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'fk_consent') ?>

    <?= $form->field($model, 'interview_date') ?>

    <?= $form->field($model, 'child_support_other') ?>

    <?= $form->field($model, 'child_support_org') ?>

    <?php // echo $form->field($model, 'child_support_service') ?>

    <?php // echo $form->field($model, 'child_name') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'dob') ?>

    <?php // echo $form->field($model, 'age') ?>

    <?php // echo $form->field($model, 'disability') ?>

    <?php // echo $form->field($model, 'school_name') ?>

    <?php // echo $form->field($model, 'child_educ_level') ?>

    <?php // echo $form->field($model, 'class') ?>

    <?php // echo $form->field($model, 'country') ?>

    <?php // echo $form->field($model, 'sub_county') ?>

    <?php // echo $form->field($model, 'location') ?>

    <?php // echo $form->field($model, 'landmark') ?>

    <?php // echo $form->field($model, 'landmark_name') ?>

    <?php // echo $form->field($model, 'child_school_attendance') ?>

    <?php // echo $form->field($model, 'not_regular_reason') ?>

    <?php // echo $form->field($model, 'meal_per_day') ?>

    <?php // echo $form->field($model, 'child_chronic_ill') ?>

    <?php // echo $form->field($model, 'child_chronic_ill_spec') ?>

    <?php // echo $form->field($model, 'fmember_chronic_ill') ?>

    <?php // echo $form->field($model, 'fmember_chronic_ill_spec') ?>

    <?php // echo $form->field($model, 'parent_alive') ?>

    <?php // echo $form->field($model, 'who_alive') ?>

    <?php // echo $form->field($model, 'stay_together') ?>

    <?php // echo $form->field($model, 'fwife_number') ?>

    <?php // echo $form->field($model, 'child_live_with') ?>

    <?php // echo $form->field($model, 'sibling_no') ?>

    <?php // echo $form->field($model, 'sibling_order_9_15') ?>

    <?php // echo $form->field($model, 'sibling_order_16_20') ?>

    <?php // echo $form->field($model, 'sibling_order_21_25') ?>

    <?php // echo $form->field($model, 'sibling_order_26_30') ?>

    <?php // echo $form->field($model, 'sibling_order_31_35') ?>

    <?php // echo $form->field($model, 'sibling_order_35_above') ?>

    <?php // echo $form->field($model, 'father_name') ?>

    <?php // echo $form->field($model, 'father_contact') ?>

    <?php // echo $form->field($model, 'mother_name') ?>

    <?php // echo $form->field($model, 'mother_contact') ?>

    <?php // echo $form->field($model, 'caregiver_name') ?>

    <?php // echo $form->field($model, 'caregiver_contact') ?>

    <?php // echo $form->field($model, 'other_name') ?>

    <?php // echo $form->field($model, 'other_name_contact') ?>

    <?php // echo $form->field($model, 'fmember_income_no') ?>

    <?php // echo $form->field($model, 'income_regularity') ?>

    <?php // echo $form->field($model, 'household_indebt') ?>

    <?php // echo $form->field($model, 'household_assets') ?>

    <?php // echo $form->field($model, 'household_tools') ?>

    <?php // echo $form->field($model, 'hhold_educ_level') ?>

    <?php // echo $form->field($model, 'sex_exploit') ?>

    <?php // echo $form->field($model, 'exploit_happen_when') ?>

    <?php // echo $form->field($model, 'exploit_continue') ?>

    <?php // echo $form->field($model, 'exploit_month') ?>

    <?php // echo $form->field($model, 'exploit_year') ?>

    <?php // echo $form->field($model, 'exploit_reported') ?>

    <?php // echo $form->field($model, 'exploit_reported_to') ?>

    <?php // echo $form->field($model, 'exploit_rpt_to_spec') ?>

    <?php // echo $form->field($model, 'exploit_notreported_reason') ?>

    <?php // echo $form->field($model, 'other_detail') ?>

    <?php // echo $form->field($model, 'child_init') ?>

    <?php // echo $form->field($model, 'caregiver_interview_name') ?>

    <?php // echo $form->field($model, 'caregiver_interview_contact') ?>

    <?php // echo $form->field($model, 'caregiver_interview_date') ?>

    <?php // echo $form->field($model, 'kesho_staff_name') ?>

    <?php // echo $form->field($model, 'kesho_staff_contact') ?>

    <?php // echo $form->field($model, 'kesho_staff_interview_date') ?>

    <?php // echo $form->field($model, 'kesho_designation') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
