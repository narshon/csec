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

<?php   $id = isset($model->id)?$model->id:0; $keyword = "economy"; $view_file = 'economy';?>
<div class="<?= $keyword ?>-form" id="<?= $keyword ?>-form-div-<?= $id ?>">
    <?php  $form = ActiveForm::begin(['id'=> $keyword.'-form-'.$id]); ?>
     <div id="<?= $keyword ?>-form-alert-<?= $id ?>"></div>

     <?= $form->field($model, 'fmember_income_no')->textInput() ?>

     <?= $form->field($model, 'fmember_income_sources')->textInput() ?>

    <?= $form->field($model, 'income_regularity')->textInput() ?>

    <?= $form->field($model, 'household_indebt')->textInput() ?>

    <?= $form->field($model, 'household_assets')->textInput() ?>

    <?= $form->field($model, 'household_tools')->textInput() ?>

    <?= $form->field($model, 'hhold_educ_level')->textInput(['maxlength' => true]) ?>

        


    <div class="form-group">
         <?php $url =  Url::to([$model->isNewRecord?'create':'update','id'=>$model->id, 'keyword'=>$keyword, 'view'=>$view_file]); ?>
        <?= Html::submitButton('Save', ['class' =>'btn btn-success btn-create pull-right','onclick'=>"ajaxFormSubmit('$url','$keyword-form-div-$id','$keyword-form-$id',1); return false;"]) ?>
    </div>



    <?php ActiveForm::end(); ?>

</div>
