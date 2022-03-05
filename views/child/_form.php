<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use kartik\date\DatePicker;
use kartik\select2\Select2;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Child */
/* @var $form yii\widgets\ActiveForm */
?>
 
<?php   $id = isset($model->id)?$model->id:0; $keyword = "child"; ?>
<div class="<?= $keyword ?>-form" id="<?= $keyword ?>-form-div-<?= $id ?>">
    <?php  $form = ActiveForm::begin(['id'=> $keyword.'-form-'.$id]); ?>
     <div id="<?= $keyword ?>-form-alert-<?= $id ?>"></div>

    <?= $form->field($model, 'fk_consent')->hiddenInput() ?>

    <?= $form->field($model, 'interview_date')->widget(DatePicker::className(),[
            'removeButton' => false,
            'type' => DatePicker::TYPE_COMPONENT_APPEND,
            'pluginOptions' => [
                'autoclose'=>true,
                'format' => 'yyyy-mm-dd'
            ]
    ]) ?>

    <?= $form->field($model, 'child_support_other')->widget(Select2::classname(), [
        'data' => ['1' => 'Yes','0' =>'No'],
        'options' => [
            'placeholder' => 'Select...',
            'multiple' => false,
            'disabled' => false,
        ],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'child_support_org')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'child_support_service')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'child_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dob')->widget(DatePicker::className(),[
            'removeButton' => false,
            'type' => DatePicker::TYPE_COMPONENT_APPEND,
            'pluginOptions' => [
                'autoclose'=>true,
                'format' => 'yyyy-mm-dd'
            ]
    ]) ?>


    <?= $form->field($model, 'age')->textInput() ?>

    <?= $form->field($model, 'disability')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'school_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'child_educ_level')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'class')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sub_county')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'landmark')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'landmark_name')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'child_school_attendance')->widget(Select2::classname(), [
        'data' => ['1' => 'Regular','2' =>'Not Regular','3' =>'Never went to school'],
        'options' => [
            'placeholder' => 'Select...',
            'multiple' => false,
            'disabled' => false,
        ],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'not_regular_reason')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'meal_per_day')->widget(Select2::classname(), [
        'data' => ['1' => '1 in a day','2' =>'2 in a day','3' =>'3 in a day',
                   '4' =>'Sometimes goes without food',],
        'options' => [
            'placeholder' => 'Select...',
            'multiple' => false,
            'disabled' => false,
        ],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'child_chronic_ill')->widget(Select2::classname(), [
        'data' => ['yes' => 'Yes','no' =>'No'],
        'options' => [
            'placeholder' => 'Select...',
            'multiple' => false,
            'disabled' => false,
        ],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'child_chronic_ill_spec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fmember_chronic_ill')->widget(Select2::classname(), [
        'data' => ['1' => 'Yes','0' =>'No'],
        'options' => [
            'placeholder' => 'Select...',
            'multiple' => false,
            'disabled' => false,
        ],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'fmember_chronic_ill_spec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parent_alive')->widget(Select2::classname(), [
        'data' => ['1' => 'Yes','0' =>'No'],
        'options' => [
            'placeholder' => 'Select...',
            'multiple' => false,
            'disabled' => false,
        ],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'who_alive')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stay_together')->widget(Select2::classname(), [
        'data' => ['1' => 'Yes','0' =>'No'],
        'options' => [
            'placeholder' => 'Select...',
            'multiple' => false,
            'disabled' => false,
        ],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'fwife_number')->textInput() ?>

    <?= $form->field($model, 'child_live_with')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sibling_no')->textInput() ?>

    <?= $form->field($model, 'sibling_order_9_15')->textInput() ?>

    <?= $form->field($model, 'sibling_order_16_20')->textInput() ?>

    <?= $form->field($model, 'sibling_order_21_25')->textInput() ?>

    <?= $form->field($model, 'sibling_order_26_30')->textInput() ?>

    <?= $form->field($model, 'sibling_order_31_35')->textInput() ?>

    <?= $form->field($model, 'sibling_order_35_above')->textInput() ?>

    <?= $form->field($model, 'father_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'father_contact')->textInput() ?>

    <?= $form->field($model, 'mother_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mother_contact')->textInput() ?>

    <?= $form->field($model, 'caregiver_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'caregiver_contact')->textInput() ?>

    <?= $form->field($model, 'other_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'other_name_contact')->textInput() ?>

    <?= $form->field($model, 'fmember_income_no')->textInput() ?>

    <?= $form->field($model, 'income_regularity')->textInput() ?>

    <?= $form->field($model, 'household_indebt')->textInput() ?>

    <?= $form->field($model, 'household_assets')->textInput() ?>

    <?= $form->field($model, 'household_tools')->textInput() ?>

    <?= $form->field($model, 'hhold_educ_level')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sex_exploit')->textarea(['rows' => 6]) ?>


    <?= $form->field($model, 'exploit_happen_when')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'exploit_continue')->widget(Select2::classname(), [
        'data' => ['1' => 'Yes','0' =>'No'],
        'options' => [
            'placeholder' => 'Select...',
            'multiple' => false,
            'disabled' => false,
        ],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'exploit_month')->textInput() ?>

    <?= $form->field($model, 'exploit_year')->textInput() ?>

    <?= $form->field($model, 'exploit_reported')->widget(Select2::classname(), [
        'data' => ['1' => 'Yes','0' =>'No'],
        'options' => [
            'placeholder' => 'Select...',
            'multiple' => false,
            'disabled' => false,
        ],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'exploit_reported_to')->widget(Select2::classname(), [
        'data' => ['family member' => 'Family member','community focal person' =>'Community Focal person',
        'religious leader' =>'Religious leaders','teacher' =>'Teachers','department of children services' =>'Department of Children services',
        'other' =>'Other',],
        'options' => [
            'placeholder' => 'Select...',
            'multiple' => false,
            'disabled' => false,
        ],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'exploit_rpt_to_spec')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'exploit_notreported_reason')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'other_detail')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'child_init')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'caregiver_interview_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'caregiver_interview_contact')->textInput() ?>

    <?= $form->field($model, 'caregiver_interview_date')->widget(DatePicker::className(),[
            'removeButton' => false,
            'type' => DatePicker::TYPE_COMPONENT_APPEND,
            'pluginOptions' => [
                'autoclose'=>true,
                'format' => 'yyyy-mm-dd'
            ]
    ]) ?>

    <?= $form->field($model, 'kesho_staff_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kesho_staff_contact')->textInput() ?>

    <?= $form->field($model, 'kesho_staff_interview_date')->widget(DatePicker::className(),[
            'removeButton' => false,
            'type' => DatePicker::TYPE_COMPONENT_APPEND,
            'pluginOptions' => [
                'autoclose'=>true,
                'format' => 'yyyy-mm-dd'
            ]
    ]) ?>


    <?= $form->field($model, 'kesho_designation')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
         <?php $url =  Url::to([$model->isNewRecord?'create':'update','id'=>$model->id, 'keyword'=>$keyword]); ?>
        <?= Html::submitButton('Save', ['class' =>'btn btn-success btn-create','onclick'=>"ajaxFormSubmit('$url','$keyword-form-div-$id','$keyword-form-$id',1); return false;"]) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
