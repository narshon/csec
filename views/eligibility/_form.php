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
  
  <?php   $id = isset($model->id)?$model->id:0; $keyword = "eligibility"; ?>
<div class="<?= $keyword ?>-form" id="<?= $keyword ?>-form-div-<?= $id ?>">
    <?php  $form = ActiveForm::begin(['id'=> $keyword.'-form-'.$id]); ?>
     <div id="<?= $keyword ?>-form-alert-<?= $id ?>"></div>

    <?= $form->field($model, 'child_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'eligibility_date')->widget(DatePicker::className(),[
            'removeButton' => false,
            'type' => DatePicker::TYPE_COMPONENT_APPEND,
            'pluginOptions' => [
                'autoclose'=>true,
                'format' => 'yyyy-mm-dd'
            ]
    ]) ?>

    <?= $form->field($model, 'eligibility_date')->textInput() ?>

    <?= $form->field($model, 'factor_family')->textInput() ?>

    <?= $form->field($model, 'factor_env')->textInput() ?>

    <?= $form->field($model, 'factor_peer_pressure')->textInput() ?>

    <?= $form->field($model, 'factor_economic')->textInput() ?>

    <?= $form->field($model, 'factor_remark')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'age_range')->textInput() ?>

    <?= $form->field($model, 'child_attitude')->textInput() ?>

    <?= $form->field($model, 'caregiver_attitude')->textInput() ?>

    <?= $form->field($model, 'disability_level')->textInput() ?>

    <?= $form->field($model, 'age_remarks')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'child_attitude_rmk')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'caregiver_attitude_rmk')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'disability_level_rmk')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'kesho_kenya_rmk')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'kesho_staff_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vetting_comm_rmk')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'chairperson_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
         <?php $url =  Url::to([$model->isNewRecord?'create':'update','id'=>$model->id, 'keyword'=>$keyword]); ?>
        <?= Html::submitButton('Save', ['class' =>'btn btn-success btn-create','onclick'=>"ajaxFormSubmit('$url','$keyword-form-div-$id','$keyword-form-$id',1); return false;"]) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
