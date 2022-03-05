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
  
  <?php   $id = isset($model->id)?$model->id:0; $keyword = "kesho-remarks"; ?>
<div class="<?= $keyword ?>-form" id="<?= $keyword ?>-form-div-<?= $id ?>">
    <?php  $form = ActiveForm::begin(['id'=> $keyword.'-form-'.$id]); ?>
     <div id="<?= $keyword ?>-form-alert-<?= $id ?>"></div>


    <?= $form->field($model, 'kesho_kenya_rmk')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'kesho_staff_name')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
         <?php $url =  Url::to([$model->isNewRecord?'create':'update','id'=>$model->id, 'keyword'=>$keyword, 'view'=>'kesho-remarks']); ?>
        <?= Html::submitButton('Save', ['class' =>'btn btn-success btn-create','onclick'=>"ajaxFormSubmit('$url','$keyword-form-div-$id','$keyword-form-$id',1); return false;"]) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
