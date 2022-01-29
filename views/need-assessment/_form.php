<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NeedAssessment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="need-assessment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fk_child')->textInput() ?>

    <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alive_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mother')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'father')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
