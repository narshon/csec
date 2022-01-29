<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ConsentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="consent-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'fk_eligibilty_id') ?>

    <?= $form->field($model, 'consent_edu') ?>

    <?= $form->field($model, 'consent_legal') ?>

    <?= $form->field($model, 'consent_disability') ?>

    <?php // echo $form->field($model, 'consent_psycho') ?>

    <?php // echo $form->field($model, 'consent_comm') ?>

    <?php // echo $form->field($model, 'consent_health') ?>

    <?php // echo $form->field($model, 'consent_livelihood') ?>

    <?php // echo $form->field($model, 'consent_family') ?>

    <?php // echo $form->field($model, 'caregiver_init') ?>

    <?php // echo $form->field($model, 'caregiver_contact') ?>

    <?php // echo $form->field($model, 'child_init') ?>

    <?php // echo $form->field($model, 'staff_init') ?>

    <?php // echo $form->field($model, 'consent_date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
