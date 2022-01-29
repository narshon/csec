<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HomeVisit */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="home-visit-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fk_child')->textInput() ?>

    <?= $form->field($model, 'home_visit_date')->textInput() ?>

    <?= $form->field($model, 'visit_no')->textInput() ?>

    <?= $form->field($model, 'case_file_no')->textInput() ?>

    <?= $form->field($model, 'life_change')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'change_effect')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
