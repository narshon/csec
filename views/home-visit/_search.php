<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HomeVisitSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="home-visit-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'fk_child') ?>

    <?= $form->field($model, 'home_visit_date') ?>

    <?= $form->field($model, 'visit_no') ?>

    <?= $form->field($model, 'case_file_no') ?>

    <?php // echo $form->field($model, 'life_change') ?>

    <?php // echo $form->field($model, 'change_effect') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
