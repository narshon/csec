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
   
<?php   $id = isset($model->id)?$model->id:0; $keyword = "education"; $view_file = 'education' ?>
<div class="<?= $keyword ?>-form" id="<?= $keyword ?>-form-div-<?= $id ?>">
    <?php  $form = ActiveForm::begin(['id'=> $keyword.'-form-'.$id]); ?>
     <div id="<?= $keyword ?>-form-alert-<?= $id ?>"></div>

     <?php 
        echo $form->field($model, 'prev_school_attended')->widget(Select2::classname(), [
            'data' => \app\models\Lookup::getLookupValues('prev_school_attended'),
            'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    ?>

    <?= $form->field($model, 'prev_school')->textInput(['maxlength' => true]) ?>

    <?php 
        echo $form->field($model, 'current_school_attend')->widget(Select2::classname(), [
            'data' => \app\models\Lookup::getLookupValues('current_school_attend'),
            'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    ?>

    <?= $form->field($model, 'current_school_name')->textInput(['maxlength' => true]) ?>

    <?php 
        echo $form->field($model, 'current_edu_level')->widget(Select2::classname(), [
            'data' => \app\models\Lookup::getLookupValues('current_edu_level'),
            'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    ?>

    <?= $form->field($model, 'current_edu_level_class')->textInput(['maxlength' => true]) ?>
    

    <div class="form-group">
         <?php $url =  Url::to([$model->isNewRecord?'create':'update','id'=>$model->id, 'keyword'=>$keyword, 'view'=>$view_file]); ?>
        <?= Html::submitButton('Save', ['class' =>'btn btn-success btn-create','onclick'=>"ajaxFormSubmit('$url','$keyword-form-div-$id','$keyword-form-$id',1); return false;"]) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
