<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\SchoolVisit */
/* @var $form yii\widgets\ActiveForm */
?>

<?php   $id = isset($model->id)?$model->id:0; $keyword = "school-visit"; ?>
<div class="<?= $keyword ?>-form" id="<?= $keyword ?>-form-div-<?= $id ?>">
    <?php  $form = ActiveForm::begin(['id'=> $keyword.'-form-'.$id, 'options' => ['enctype' => 'multipart/form-data']]); ?>
     <div id="<?= $keyword ?>-form-alert-<?= $id ?>"></div>

    <?= $form->field($model, 'fk_child')->hiddenInput()->label("") ?>

    <?= $form->field($model, 'visit_date')->widget(DatePicker::className(),[
            'removeButton' => false,
            'type' => DatePicker::TYPE_COMPONENT_APPEND,
            'pluginOptions' => [
                'autoclose'=>true,
                'format' => 'yyyy-mm-dd'
            ]
    ]) 
    ?>

    <?= $form->field($model, 'school_attendance')->widget(Select2::classname(), [
            'data' => \app\models\Lookup::getLookupValues('school_attendance'),
            'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);  ?>

    <?= $form->field($model, 'reg_days_no')->textInput() ?>

    <?= $form->field($model, 'irreg_days_no')->textInput() ?>

    <?= $form->field($model, 'irreg_reasons')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'class_particip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'passive_particip_reasons')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'student_dressing')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'academic_perfom')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'academic_perform_report')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'extra_curr_act')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'discipline_level')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'discipline_why')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'outstanding_act')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'area_concern')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'follow_up')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'student_comment')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'teacher_comment')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'staff_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_designation')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
