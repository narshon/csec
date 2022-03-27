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

<?php   $id = isset($model->id)?$model->id:0; $keyword = "family"; $view_file = 'family';?>
<div class="<?= $keyword ?>-form" id="<?= $keyword ?>-form-div-<?= $id ?>">
    <?php  $form = ActiveForm::begin(['id'=> $keyword.'-form-'.$id]); ?>
     <div id="<?= $keyword ?>-form-alert-<?= $id ?>"></div>

       
    <?php 
        echo $form->field($model, 'parent_alive')->widget(Select2::classname(), [
            'data' => \app\models\Lookup::getLookupValues('YESNO'),
            'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    ?>

    <?= $form->field($model, 'who_alive')->textInput(['maxlength' => true]) ?>
    
    <?php 
        echo $form->field($model, 'stay_together')->widget(Select2::classname(), [
            'data' => \app\models\Lookup::getLookupValues('YESNO'),
            'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    ?>

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


    <div class="form-group">
         <?php $url =  Url::to([$model->isNewRecord?'create':'update','id'=>$model->id, 'keyword'=>$keyword, 'view'=>$view_file]); ?>
        <?= Html::submitButton('Save', ['class' =>'btn btn-success btn-create pull-right','onclick'=>"ajaxFormSubmit('$url','$keyword-form-div-$id','$keyword-form-$id',1); return false;"]) ?>
    </div>



    <?php ActiveForm::end(); ?>

</div>
