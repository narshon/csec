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

<?php   $id = isset($model->id)?$model->id:0; $keyword = "health"; $view_file = 'health';?>
<div class="<?= $keyword ?>-form" id="<?= $keyword ?>-form-div-<?= $id ?>">
    <?php  $form = ActiveForm::begin(['id'=> $keyword.'-form-'.$id]); ?>
     <div id="<?= $keyword ?>-form-alert-<?= $id ?>"></div>

     <?= $form->field($model, 'meal_per_day')->widget(Select2::classname(), [
        'data' => ['1' => '1 in a day','2' =>'2 in a day','3' =>'3 in a day',
                   '4' =>'Sometimes goes without food',],
        'options' => [
            'placeholder' => 'Select...',
            'multiple' => false,
            'disabled' => false,
        ],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'child_chronic_ill')->widget(Select2::classname(), [
        'data' => ['yes' => 'Yes','no' =>'No'],
        'options' => [
            'placeholder' => 'Select...',
            'multiple' => false,
            'disabled' => false,
        ],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'child_chronic_ill_spec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fmember_chronic_ill')->widget(Select2::classname(), [
        'data' => ['1' => 'Yes','0' =>'No'],
        'options' => [
            'placeholder' => 'Select...',
            'multiple' => false,
            'disabled' => false,
        ],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'fmember_chronic_ill_spec')->textInput(['maxlength' => true]) ?>  
        


    <div class="form-group">
         <?php $url =  Url::to([$model->isNewRecord?'create':'update','id'=>$model->id, 'keyword'=>$keyword, 'view'=>$view_file]); ?>
        <?= Html::submitButton('Save', ['class' =>'btn btn-success btn-create pull-right','onclick'=>"ajaxFormSubmit('$url','$keyword-form-div-$id','$keyword-form-$id',1); return false;"]) ?>
    </div>



    <?php ActiveForm::end(); ?>

</div>
