<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Consent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="consent-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fk_eligibilty_id')->textInput() ?>

    <?= $form->field($model, 'consent_edu')->textInput() ?>

    <?= $form->field($model, 'consent_legal')->textInput() ?>

    <?= $form->field($model, 'consent_disability')->textInput() ?>

    <?= $form->field($model, 'consent_psycho')->textInput() ?>

    <?= $form->field($model, 'consent_comm')->textInput() ?>

    <?= $form->field($model, 'consent_health')->textInput() ?>

    <?= $form->field($model, 'consent_livelihood')->textInput() ?>

    <?= $form->field($model, 'consent_family')->textInput() ?>

    <?= $form->field($model, 'caregiver_init')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'caregiver_contact')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'child_init')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_init')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'consent_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
