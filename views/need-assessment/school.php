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
   
<?php   $id = isset($model->id)?$model->id:0; $keyword = "school"; $view_file = 'school' ?>
<div class="<?= $keyword ?>-form" id="<?= $keyword ?>-form-div-<?= $id ?>">
    <?php  $form = ActiveForm::begin(['id'=> $keyword.'-form-'.$id]); ?>
     <div id="<?= $keyword ?>-form-alert-<?= $id ?>"></div>

     <?= $form->field($model, 'education_facilities')->textInput() ?>

    <?= $form->field($model, 'school_type')->textInput() ?>

    <?= $form->field($model, 'school_unique_needs')->textInput() ?>

    <?= $form->field($model, 'school_unique_needs_spec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'school_household_attending')->textInput() ?>

    <?= $form->field($model, 'school_household_capacity')->textInput() ?>

    <?= $form->field($model, 'education_caregiver_interest')->textInput() ?>

    <div class="form-group">
         <?php $url =  Url::to([$model->isNewRecord?'create':'update','id'=>$model->id, 'keyword'=>$keyword, 'view'=>$view_file]); ?>
        <?= Html::submitButton('Save', ['class' =>'btn btn-success btn-create','onclick'=>"ajaxFormSubmit('$url','$keyword-form-div-$id','$keyword-form-$id',1); return false;"]) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
