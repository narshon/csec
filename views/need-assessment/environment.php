<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\NeedAssessment */
/* @var $form yii\widgets\ActiveForm */
?>
   
<?php   $id = isset($model->id)?$model->id:0; $keyword = "environment"; $view_file = 'environment' ?>
<div class="<?= $keyword ?>-form" id="<?= $keyword ?>-form-div-<?= $id ?>">
    <?php  $form = ActiveForm::begin(['id'=> $keyword.'-form-'.$id]); ?>
     <div id="<?= $keyword ?>-form-alert-<?= $id ?>"></div>

     <?= $form->field($model, 'meal_per_day')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'food_variety_consumed')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'food_source')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'source_reliability')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'latrine')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'clean_water_access')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'home_environ')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bath_arrangement')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sanitary')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'health_service')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'medical_insurance')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'member_chronic_illness')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'which_member')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'chronic_illness_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dificulty_seeing')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'difficulty_hearing')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'difficulty_walking')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dificulty_remembering')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dificulty_self_care')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'difficulty_communicating')->textInput() ?>

    <?= $form->field($model, 'child_disability_care')->textInput() ?>

    <?= $form->field($model, 'household_additional_support')->textInput() ?>

    <?= $form->field($model, 'household_additional_support_spec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rel_cult_health_access')->textInput() ?>

    <?= $form->field($model, 'rel_cult_health_access_spec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'community_services')->textInput() ?>

    <?= $form->field($model, 'community_services_access')->textInput() ?>

    <div class="form-group">
         <?php $url =  Url::to([$model->isNewRecord?'create':'update','id'=>$model->id, 'keyword'=>$keyword, 'view'=>$view_file]); ?>
        <?= Html::submitButton('Save', ['class' =>'btn btn-success btn-create','onclick'=>"ajaxFormSubmit('$url','$keyword-form-div-$id','$keyword-form-$id',1); return false;"]) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
