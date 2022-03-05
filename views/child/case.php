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

<?php   $id = isset($model->id)?$model->id:0; $keyword = "case"; $view_file = 'case';?>
<div class="<?= $keyword ?>-form" id="<?= $keyword ?>-form-div-<?= $id ?>">
    <?php  $form = ActiveForm::begin(['id'=> $keyword.'-form-'.$id]); ?>
     <div id="<?= $keyword ?>-form-alert-<?= $id ?>"></div>

     <?= $form->field($model, 'sex_exploit')->textarea(['rows' => 6]) ?>


    <?= $form->field($model, 'exploit_happen_when')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'exploit_continue')->widget(Select2::classname(), [
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

    <?= $form->field($model, 'exploit_month')->textInput() ?>

    <?= $form->field($model, 'exploit_year')->textInput() ?>

    <?= $form->field($model, 'exploit_reported')->widget(Select2::classname(), [
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

    <?= $form->field($model, 'exploit_reported_to')->widget(Select2::classname(), [
        'data' => ['family member' => 'Family member','community focal person' =>'Community Focal person',
        'religious leader' =>'Religious leaders','teacher' =>'Teachers','department of children services' =>'Department of Children services',
        'other' =>'Other',],
        'options' => [
            'placeholder' => 'Select...',
            'multiple' => false,
            'disabled' => false,
        ],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'exploit_rpt_to_spec')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'exploit_notreported_reason')->textarea(['rows' => 6]) ?>  
            


    <div class="form-group">
         <?php $url =  Url::to([$model->isNewRecord?'create':'update','id'=>$model->id, 'keyword'=>$keyword, 'view'=>$view_file]); ?>
        <?= Html::submitButton('Save', ['class' =>'btn btn-success btn-create pull-right','onclick'=>"ajaxFormSubmit('$url','$keyword-form-div-$id','$keyword-form-$id',1); return false;"]) ?>
    </div>



    <?php ActiveForm::end(); ?>

</div>
