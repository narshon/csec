<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Consent */
/* @var $form yii\widgets\ActiveForm */
?>

<?php   $id = isset($model->id)?$model->id:0; $keyword = "consent"; ?>
<div class="<?= $keyword ?>-form" id="<?= $keyword ?>-form-div-<?= $id ?>">
    <?php  $form = ActiveForm::begin(['id'=> $keyword.'-form-'.$id, 'options'=>['class'=>'wide form']]); ?>
     <div id="<?= $keyword ?>-form-alert-<?= $id ?>"></div>

    <div class="panel panel-info half pull-left">

        <?php 
            echo $form->field($model, 'consent_edu')->widget(Select2::classname(), [
                'data' => \app\models\Lookup::getLookupValues('YESNO'),
                'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]); 
        ?>
        <?php 
            echo $form->field($model, 'consent_legal')->widget(Select2::classname(), [
                'data' => \app\models\Lookup::getLookupValues('YESNO'),
                'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]); 
        ?>
        <?php 
            echo $form->field($model, 'consent_disability')->widget(Select2::classname(), [
                'data' => \app\models\Lookup::getLookupValues('YESNO'),
                'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]); 
        ?>
        <?php 
            echo $form->field($model, 'consent_psycho')->widget(Select2::classname(), [
                'data' => \app\models\Lookup::getLookupValues('YESNO'),
                'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]); 
        ?>
        <?php 
            echo $form->field($model, 'consent_comm')->widget(Select2::classname(), [
                'data' => \app\models\Lookup::getLookupValues('YESNO'),
                'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]); 
        ?>
        <?php 
            echo $form->field($model, 'consent_health')->widget(Select2::classname(), [
                'data' => \app\models\Lookup::getLookupValues('YESNO'),
                'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]); 
        ?>
        <?php 
            echo $form->field($model, 'consent_livelihood')->widget(Select2::classname(), [
                'data' => \app\models\Lookup::getLookupValues('YESNO'),
                'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]); 
        ?>
        <?php 
            echo $form->field($model, 'consent_family')->widget(Select2::classname(), [
                'data' => \app\models\Lookup::getLookupValues('YESNO'),
                'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]); 
        ?>
    </div>
    
    <div class="panel panel-info half pull-left">
        <?= $form->field($model, 'caregiver_init')->textInput(['size'=>50]) ?>

        <?= $form->field($model, 'caregiver_contact')->textInput(['size'=>50]) ?>

        <?= $form->field($model, 'child_init')->textInput(['size'=>50]) ?>

        <?= $form->field($model, 'staff_init')->textInput(['size'=>50]) ?>

        <?= $form->field($model, 'consent_date')->textInput() ?>

        <?= $form->field($model, 'fk_eligibilty_id')->hiddenInput(['size'=>50])->label("") ?>
    </div>
    <div style="clear:both"></div>
    <div class="form-group">
         <?php $url =  Url::to([$model->isNewRecord?'create':'update','id'=>$model->id, 'keyword'=>$keyword, 'view'=>'_form']); ?>
        <?= Html::submitButton('Save', ['class' =>'btn btn-success btn-create pull-right','onclick'=>"ajaxFormSubmit('$url','$keyword-form-div-$id','$keyword-form-$id',1); return false;"]) ?>
    </div>
   
    <?php ActiveForm::end(); ?>

</div>
