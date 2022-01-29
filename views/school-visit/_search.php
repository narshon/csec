<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SchoolVisitSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="school-visit-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'fk_child') ?>

    <?= $form->field($model, 'visit_date') ?>

    <?= $form->field($model, 'school_attendance') ?>

    <?= $form->field($model, 'reg_days_no') ?>

    <?php // echo $form->field($model, 'irreg_days_no') ?>

    <?php // echo $form->field($model, 'irreg_reasons') ?>

    <?php // echo $form->field($model, 'class_particip') ?>

    <?php // echo $form->field($model, 'passive_particip_reasons') ?>

    <?php // echo $form->field($model, 'student_dressing') ?>

    <?php // echo $form->field($model, 'academic_perfom') ?>

    <?php // echo $form->field($model, 'academic_perform_report') ?>

    <?php // echo $form->field($model, 'extra_curr_act') ?>

    <?php // echo $form->field($model, 'discipline_level') ?>

    <?php // echo $form->field($model, 'discipline_why') ?>

    <?php // echo $form->field($model, 'outstanding_act') ?>

    <?php // echo $form->field($model, 'area_concern') ?>

    <?php // echo $form->field($model, 'follow_up') ?>

    <?php // echo $form->field($model, 'student_comment') ?>

    <?php // echo $form->field($model, 'teacher_comment') ?>

    <?php // echo $form->field($model, 'staff_name') ?>

    <?php // echo $form->field($model, 'staff_designation') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
