<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EligibilitySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="eligibility-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'child_code') ?>

    <?= $form->field($model, 'eligibility_date') ?>

    <?= $form->field($model, 'factor_family') ?>

    <?= $form->field($model, 'factor_env') ?>

    <?php // echo $form->field($model, 'factor_peer_pressure') ?>

    <?php // echo $form->field($model, 'factor_economic') ?>

    <?php // echo $form->field($model, 'factor_remark') ?>

    <?php // echo $form->field($model, 'age_range') ?>

    <?php // echo $form->field($model, 'child_attitude') ?>

    <?php // echo $form->field($model, 'caregiver_attitude') ?>

    <?php // echo $form->field($model, 'disability_level') ?>

    <?php // echo $form->field($model, 'age_remarks') ?>

    <?php // echo $form->field($model, 'child_attitude_rmk') ?>

    <?php // echo $form->field($model, 'caregiver_attitude_rmk') ?>

    <?php // echo $form->field($model, 'disability_level_rmk') ?>

    <?php // echo $form->field($model, 'kesho_kenya_rmk') ?>

    <?php // echo $form->field($model, 'kesho_staff_name') ?>

    <?php // echo $form->field($model, 'vetting_comm_rmk') ?>

    <?php // echo $form->field($model, 'chairperson_name') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
