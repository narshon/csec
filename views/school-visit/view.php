<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SchoolVisit */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'School Visits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="school-visit-view">

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
            'fk_child',
            'visit_date',
            'school_attendance',
            'reg_days_no',
            'irreg_days_no',
            'irreg_reasons:ntext',
            'class_particip',
            'passive_particip_reasons:ntext',
            'student_dressing:ntext',
            'academic_perfom:ntext',
            'academic_perform_report',
            'extra_curr_act',
            'discipline_level',
            'discipline_why:ntext',
            'outstanding_act:ntext',
            'area_concern:ntext',
            'follow_up:ntext',
            'student_comment:ntext',
            'teacher_comment:ntext',
            'staff_name',
            'staff_designation',
        ],
    ]) ?>

</div>
