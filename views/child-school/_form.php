<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ChildSchool */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="child-school-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fk_child')->textInput() ?>

    <?= $form->field($model, 'fk_school')->textInput() ?>

    <?= $form->field($model, 'class')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stud_reg_no')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
