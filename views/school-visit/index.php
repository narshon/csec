<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\SchoolVisitSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'School Visits';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="school-visit-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create School Visit', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'fk_child',
            'visit_date',
            'school_attendance',
            'reg_days_no',
            //'irreg_days_no',
            //'irreg_reasons:ntext',
            //'class_particip',
            //'passive_particip_reasons:ntext',
            //'student_dressing:ntext',
            //'academic_perfom:ntext',
            //'academic_perform_report',
            //'extra_curr_act',
            //'discipline_level',
            //'discipline_why:ntext',
            //'outstanding_act:ntext',
            //'area_concern:ntext',
            //'follow_up:ntext',
            //'student_comment:ntext',
            //'teacher_comment:ntext',
            //'staff_name',
            //'staff_designation',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
