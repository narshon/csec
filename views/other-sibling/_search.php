<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OtherSiblingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="other-sibling-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'fk_child') ?>

    <?= $form->field($model, 'name_sibling') ?>

    <?= $form->field($model, 'nickname') ?>

    <?= $form->field($model, 'location') ?>

    <?php // echo $form->field($model, 'edu_empl') ?>

    <?php // echo $form->field($model, 'class') ?>

    <?php // echo $form->field($model, 'age') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
