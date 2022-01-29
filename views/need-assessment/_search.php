<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NeedAssessmentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="need-assessment-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'fk_child') ?>

    <?= $form->field($model, 'location') ?>

    <?= $form->field($model, 'phone') ?>

    <?= $form->field($model, 'alive_status') ?>

    <?php // echo $form->field($model, 'mother') ?>

    <?php // echo $form->field($model, 'father') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
