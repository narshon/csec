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
  
<?php   $id = isset($model->id)?$model->id:0; $keyword = "factors"; ?>
<div class="<?= $keyword ?>-form" id="<?= $keyword ?>-form-div-<?= $id ?>">
    <?php  $form = ActiveForm::begin(['id'=> $keyword.'-form-'.$id]); ?>
     <div id="<?= $keyword ?>-form-alert-<?= $id ?>"></div>
        <div class="panel panel-info">
        <div class="half pull-left">
            <?= $form->field($model, 'child_code')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="half pull-right">
        <?= $form->field($model, 'eligibility_date')->widget(DatePicker::className(),[
                'removeButton' => false,
                'type' => DatePicker::TYPE_COMPONENT_APPEND,
                'pluginOptions' => [
                    'autoclose'=>true,
                    'format' => 'yyyy-mm-dd',
                    'class' =>"col-6"
                ]
        ])->label("Eligibility Date") ?>
        </div>
        <div style="clear:both"></div>
        </div>
        
    <div class="panel panel-info">
        <div class="half pull-left">
            <?= $form->field($model, 'factor_family')->textInput() ?>

            <?= $form->field($model, 'factor_env')->textInput() ?>

            <?= $form->field($model, 'factor_peer_pressure')->textInput() ?>

            <?= $form->field($model, 'factor_economic')->textInput() ?>
        </div> 
        <div class="half pull-right">
            <?= $form->field($model, 'factor_remark')->textarea(['rows' => 6])->label("Factors Remarks") ?>
        </div>
        <div style="clear:both"></div>
    </div>
    
    <div class="panel panel-info">
        <div class="half pull-left">
            <?= $form->field($model, 'age_range')->textInput()->label("Age Range") ?>
        </div>
        
        <div class="half pull-right">
        <?= $form->field($model, 'age_remarks')->textarea(['rows' => 6])->label("Age Remarks") ?>
        </div>
    
        <div style="clear:both"></div>
    </div>

    <div class="panel panel-info">
        <div class="half pull-left">
            <?= $form->field($model, 'child_attitude')->textInput()->label("Attitude of the Child") ?>
        </div>
        <div class="half pull-right">
            <?= $form->field($model, 'child_attitude_rmk')->textarea(['rows' => 6])->label("Child Attitude Remarks") ?>
        </div>
        <hr>
        <div style="clear:both"></div>
    </div>

    <div class="panel panel-info">
        <div class="half pull-left">
        <?= $form->field($model, 'caregiver_attitude')->textInput()->label("Attitudes of the caregiver") ?>
        </div>
        <div class="half pull-right">
        <?= $form->field($model, 'caregiver_attitude_rmk')->textarea(['rows' => 6])->label("Caregiver Attitudes Remarks") ?>
        </div>
        <hr>
        <div style="clear:both"></div>
    </div>

    <div class="panel panel-info">
        <div class="half pull-left">
            <?= $form->field($model, 'disability_level')->textInput()->label("Person with disability") ?>
        </div>
        <div class="half pull-right">
            <?= $form->field($model, 'disability_level_rmk')->textarea(['rows' => 6])->label("Remarks from field officers/social workers/counsellor") ?>
        </div>
        <hr>
        <div style="clear:both"></div>
    </div>

    <div class="form-group">
         <?php $url =  Url::to([$model->isNewRecord?'create':'update','id'=>$model->id, 'keyword'=>$keyword, 'view'=>'factors']); ?>
        <?= Html::submitButton('Save', ['class' =>'btn btn-success btn-create pull-right','onclick'=>"ajaxFormSubmit('$url','$keyword-form-div-$id','$keyword-form-$id',1); return false;"]) ?>
    </div>



    <?php ActiveForm::end(); ?>

</div>
