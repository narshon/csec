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
   
<?php   $id = isset($model->id)?$model->id:0; $keyword = "caregiver"; $view_file = 'caregiver' ?>
<div class="<?= $keyword ?>-form" id="<?= $keyword ?>-form-div-<?= $id ?>">
    <?php  $form = ActiveForm::begin(['id'=> $keyword.'-form-'.$id]); ?>
     <div id="<?= $keyword ?>-form-alert-<?= $id ?>"></div>

     <?= $form->field($model, 'conflict_family')->textInput() ?>

    <?= $form->field($model, 'conflict_family_spec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mental_health_concern')->textInput() ?>

    <?= $form->field($model, 'mental_health_spec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'family_sig_life_event')->textInput() ?>

    <?= $form->field($model, 'family_sig_life_spec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pos_neg_events')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adults_relationship')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'children_caregiver_relation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'children_caregiver_confide')->textInput() ?>

    <?= $form->field($model, 'children_caregiver_confide_spec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'children_caregiver_comfort')->textInput() ?>

    <?= $form->field($model, 'children_caregiver_comfort_spec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'children_caregiver_react')->textInput() ?>

    <?= $form->field($model, 'children_caregiver_react_spec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'children_caregiver_time')->textInput() ?>

    <?= $form->field($model, 'children_caregiver_time_spec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'children_caregiver_communication')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'children_caregiver_encourage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'children_caregiver_misbehaviour')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'children_caregiver_free')->textInput() ?>

    <?= $form->field($model, 'children_caregiver_decision')->textInput() ?>

    <?= $form->field($model, 'child_curr_caregiver_attach')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'curr_caregiver_relation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'child_prev_caregiver_attach')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'child_prev_caregiver_relation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'self_harm')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'known_history_abuse')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inaprop_sex_behaviour')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'drug_abuse')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'abuse_symptom')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emotional_distress')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'risk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'behaviour_change')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'daily_routine')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'independence')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'like')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dislike')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fear')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'skill')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
         <?php $url =  Url::to([$model->isNewRecord?'create':'update','id'=>$model->id, 'keyword'=>$keyword, 'view'=>$view_file]); ?>
        <?= Html::submitButton('Save', ['class' =>'btn btn-success btn-create','onclick'=>"ajaxFormSubmit('$url','$keyword-form-div-$id','$keyword-form-$id',1); return false;"]) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
