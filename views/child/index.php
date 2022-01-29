<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ChildSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Children';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="child-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Child', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'fk_consent',
            'interview_date',
            'child_support_other',
            'child_support_org',
            //'child_support_service:ntext',
            //'child_name',
            //'gender',
            //'dob',
            //'age',
            //'disability',
            //'school_name',
            //'child_educ_level',
            //'class',
            //'country',
            //'sub_county',
            //'location',
            //'landmark',
            //'landmark_name',
            //'child_school_attendance',
            //'not_regular_reason:ntext',
            //'meal_per_day',
            //'child_chronic_ill',
            //'child_chronic_ill_spec',
            //'fmember_chronic_ill',
            //'fmember_chronic_ill_spec',
            //'parent_alive',
            //'who_alive',
            //'stay_together',
            //'fwife_number',
            //'child_live_with',
            //'sibling_no',
            //'sibling_order_9_15',
            //'sibling_order_16_20',
            //'sibling_order_21_25',
            //'sibling_order_26_30',
            //'sibling_order_31_35',
            //'sibling_order_35_above',
            //'father_name',
            //'father_contact',
            //'mother_name',
            //'mother_contact',
            //'caregiver_name',
            //'caregiver_contact',
            //'other_name',
            //'other_name_contact',
            //'fmember_income_no',
            //'income_regularity',
            //'household_indebt',
            //'household_assets',
            //'household_tools',
            //'hhold_educ_level',
            //'sex_exploit:ntext',
            //'exploit_happen_when',
            //'exploit_continue',
            //'exploit_month',
            //'exploit_year',
            //'exploit_reported',
            //'exploit_reported_to',
            //'exploit_rpt_to_spec:ntext',
            //'exploit_notreported_reason:ntext',
            //'other_detail:ntext',
            //'child_init',
            //'caregiver_interview_name',
            //'caregiver_interview_contact',
            //'caregiver_interview_date',
            //'kesho_staff_name',
            //'kesho_staff_contact',
            //'kesho_staff_interview_date',
            //'kesho_designation',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
