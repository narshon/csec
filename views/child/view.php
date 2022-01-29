<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Child */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Children', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="child-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'fk_consent',
            'interview_date',
            'child_support_other',
            'child_support_org',
            'child_support_service:ntext',
            'child_name',
            'gender',
            'dob',
            'age',
            'disability',
            'school_name',
            'child_educ_level',
            'class',
            'country',
            'sub_county',
            'location',
            'landmark',
            'landmark_name',
            'child_school_attendance',
            'not_regular_reason:ntext',
            'meal_per_day',
            'child_chronic_ill',
            'child_chronic_ill_spec',
            'fmember_chronic_ill',
            'fmember_chronic_ill_spec',
            'parent_alive',
            'who_alive',
            'stay_together',
            'fwife_number',
            'child_live_with',
            'sibling_no',
            'sibling_order_9_15',
            'sibling_order_16_20',
            'sibling_order_21_25',
            'sibling_order_26_30',
            'sibling_order_31_35',
            'sibling_order_35_above',
            'father_name',
            'father_contact',
            'mother_name',
            'mother_contact',
            'caregiver_name',
            'caregiver_contact',
            'other_name',
            'other_name_contact',
            'fmember_income_no',
            'income_regularity',
            'household_indebt',
            'household_assets',
            'household_tools',
            'hhold_educ_level',
            'sex_exploit:ntext',
            'exploit_happen_when',
            'exploit_continue',
            'exploit_month',
            'exploit_year',
            'exploit_reported',
            'exploit_reported_to',
            'exploit_rpt_to_spec:ntext',
            'exploit_notreported_reason:ntext',
            'other_detail:ntext',
            'child_init',
            'caregiver_interview_name',
            'caregiver_interview_contact',
            'caregiver_interview_date',
            'kesho_staff_name',
            'kesho_staff_contact',
            'kesho_staff_interview_date',
            'kesho_designation',
        ],
    ]) ?>

</div>
