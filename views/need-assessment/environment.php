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

    <?php 
        echo $form->field($model, 'health_service')->widget(Select2::classname(), [
            'data' => \app\models\Lookup::getLookupValues('YESNO'),
            'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    ?>

    <?php 
        echo $form->field($model, 'medical_insurance')->widget(Select2::classname(), [
            'data' => \app\models\Lookup::getLookupValues('YESNO'),
            'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    ?>

    <?= $form->field($model, 'member_chronic_illness')->textInput(['maxlength' => true]) ?>
    <?php 
        echo $form->field($model, 'member_chronic_illness')->widget(Select2::classname(), [
            'data' => \app\models\Lookup::getLookupValues('YESNO'),
            'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    ?>

    <?= $form->field($model, 'which_member')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'chronic_illness_type')->textInput(['maxlength' => true]) ?>

    <?php 
        echo $form->field($model, 'dificulty_seeing')->widget(Select2::classname(), [
            'data' => \app\models\Lookup::getLookupValues('dificulty_seeing'),
            'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    ?>

    <?php 
        echo $form->field($model, 'difficulty_hearing')->widget(Select2::classname(), [
            'data' => \app\models\Lookup::getLookupValues('difficulty_hearing'),
            'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    ?>

    <?php 
        echo $form->field($model, 'difficulty_walking')->widget(Select2::classname(), [
            'data' => \app\models\Lookup::getLookupValues('difficulty_walking'),
            'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    ?>
    <?php 
        echo $form->field($model, 'dificulty_remembering')->widget(Select2::classname(), [
            'data' => \app\models\Lookup::getLookupValues('dificulty_remembering'),
            'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    ?>

    <?php 
        echo $form->field($model, 'dificulty_self_care')->widget(Select2::classname(), [
            'data' => \app\models\Lookup::getLookupValues('dificulty_self_care'),
            'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    ?>

    <?php 
        echo $form->field($model, 'difficulty_communicating')->widget(Select2::classname(), [
            'data' => \app\models\Lookup::getLookupValues('difficulty_communicating'),
            'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    ?>

    <?php 
        echo $form->field($model, 'child_disability_care')->widget(Select2::classname(), [
            'data' => \app\models\Lookup::getLookupValues('child_disability_care'),
            'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    ?>

    <?php 
        echo $form->field($model, 'household_additional_support')->widget(Select2::classname(), [
            'data' => \app\models\Lookup::getLookupValues('household_additional_support'),
            'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    ?>

    <?= $form->field($model, 'household_additional_support_spec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rel_cult_health_access')->textInput() ?>
    <?php 
        echo $form->field($model, 'rel_cult_health_access')->widget(Select2::classname(), [
            'data' => \app\models\Lookup::getLookupValues('YESNO'),
            'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    ?>

    <?= $form->field($model, 'rel_cult_health_access_spec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'community_services')->textInput() ?>
    <?php 
        echo $form->field($model, 'community_services')->widget(Select2::classname(), [
            'data' => \app\models\Lookup::getLookupValues('community_services'),
            'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    ?>

    <?php 
        echo $form->field($model, 'community_services_access')->widget(Select2::classname(), [
            'data' => \app\models\Lookup::getLookupValues('YESNO'),
            'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    ?>

    <div class="form-group">
         <?php $url =  Url::to([$model->isNewRecord?'create':'update','id'=>$model->id, 'keyword'=>$keyword, 'view'=>$view_file]); ?>
        <?= Html::submitButton('Save', ['class' =>'btn btn-success btn-create','onclick'=>"ajaxFormSubmit('$url','$keyword-form-div-$id','$keyword-form-$id',1); return false;"]) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
