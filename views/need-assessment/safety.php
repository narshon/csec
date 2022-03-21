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
   
<?php   $id = isset($model->id)?$model->id:0; $keyword = "safety"; $view_file = 'safety' ?>
<div class="<?= $keyword ?>-form" id="<?= $keyword ?>-form-div-<?= $id ?>">
    <?php  $form = ActiveForm::begin(['id'=> $keyword.'-form-'.$id]); ?>
     <div id="<?= $keyword ?>-form-alert-<?= $id ?>"></div>

     <?= $form->field($model, 'signs_of_violence')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'family_abuse')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'community_abuse')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'admin_office')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'household_condition')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'where_family_comm_live')->textarea(['rows' => 6]) ?>

    <div class="form-group">
         <?php $url =  Url::to([$model->isNewRecord?'create':'update','id'=>$model->id, 'keyword'=>$keyword, 'view'=>$view_file]); ?>
        <?= Html::submitButton('Save', ['class' =>'btn btn-success btn-create','onclick'=>"ajaxFormSubmit('$url','$keyword-form-div-$id','$keyword-form-$id',1); return false;"]) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
