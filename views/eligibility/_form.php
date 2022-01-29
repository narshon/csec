<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Eligibility */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="eligibility-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'child_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'eligibility_date')->textInput() ?>

    <?= $form->field($model, 'factor_family')->textInput() ?>

    <?= $form->field($model, 'factor_env')->textInput() ?>

    <?= $form->field($model, 'factor_peer_pressure')->textInput() ?>

    <?= $form->field($model, 'factor_economic')->textInput() ?>

    <?= $form->field($model, 'factor_remark')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'age_range')->textInput() ?>

    <?= $form->field($model, 'child_attitude')->textInput() ?>

    <?= $form->field($model, 'caregiver_attitude')->textInput() ?>

    <?= $form->field($model, 'disability_level')->textInput() ?>

    <?= $form->field($model, 'age_remarks')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'child_attitude_rmk')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'caregiver_attitude_rmk')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'disability_level_rmk')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'kesho_kenya_rmk')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'kesho_staff_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vetting_comm_rmk')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'chairperson_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
