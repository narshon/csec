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
   
<?php   $id = isset($model->id)?$model->id:0; $keyword = "support"; $view_file = 'support' ?>
<div class="<?= $keyword ?>-form" id="<?= $keyword ?>-form-div-<?= $id ?>">
    <?php  $form = ActiveForm::begin(['id'=> $keyword.'-form-'.$id]); ?>
     <div id="<?= $keyword ?>-form-alert-<?= $id ?>"></div>

     <?php 
        echo $form->field($model, 'recomendation')->widget(Select2::classname(), [
            'data' => \app\models\Lookup::getLookupValues('recomendation'),
            'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    ?>

    <?= $form->field($model, 'case_worker_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'case_manager_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
         <?php $url =  Url::to([$model->isNewRecord?'create':'update','id'=>$model->id, 'keyword'=>$keyword, 'view'=>$view_file]); ?>
        <?= Html::submitButton('Save', ['class' =>'btn btn-success btn-create','onclick'=>"ajaxFormSubmit('$url','$keyword-form-div-$id','$keyword-form-$id',1); return false;"]) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
