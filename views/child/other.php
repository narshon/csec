<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Eligibility */
/* @var $form yii\widgets\ActiveForm */
?>

<?php   $id = isset($model->id)?$model->id:0; $keyword = "other"; $view_file = 'other';?>
<div class="<?= $keyword ?>-form" id="<?= $keyword ?>-form-div-<?= $id ?>">
    <?php  $form = ActiveForm::begin(['id'=> $keyword.'-form-'.$id]); ?>
     <div id="<?= $keyword ?>-form-alert-<?= $id ?>"></div>

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
         <?php $url =  Url::to([$model->isNewRecord?'create':'update','id'=>$model->id, 'keyword'=>$keyword, 'view'=>$view_file]); ?>
        <?= Html::submitButton('Save', ['class' =>'btn btn-success btn-create pull-right','onclick'=>"ajaxFormSubmit('$url','$keyword-form-div-$id','$keyword-form-$id',1); return false;"]) ?>
    </div>



    <?php ActiveForm::end(); ?>

</div>
