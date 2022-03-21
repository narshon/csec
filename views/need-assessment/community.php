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
   
<?php   $id = isset($model->id)?$model->id:0; $keyword = "community"; $view_file = 'community' ?>
<div class="<?= $keyword ?>-form" id="<?= $keyword ?>-form-div-<?= $id ?>">
    <?php  $form = ActiveForm::begin(['id'=> $keyword.'-form-'.$id]); ?>
     <div id="<?= $keyword ?>-form-alert-<?= $id ?>"></div>

     <?= $form->field($model, 'community_culture_connect')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'family_social_connect')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'social_connect_example')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'family_close_prox')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'family_relation_extended')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'family_relation_neighbor')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'acceptance_level_child')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'local_leader')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
         <?php $url =  Url::to([$model->isNewRecord?'create':'update','id'=>$model->id, 'keyword'=>$keyword, 'view'=>$view_file]); ?>
        <?= Html::submitButton('Save', ['class' =>'btn btn-success btn-create','onclick'=>"ajaxFormSubmit('$url','$keyword-form-div-$id','$keyword-form-$id',1); return false;"]) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
