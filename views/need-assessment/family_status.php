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
   
<?php   $id = isset($model->id)?$model->id:0; $keyword = "family_status"; $view_file = 'family_status' ?>
<div class="<?= $keyword ?>-form" id="<?= $keyword ?>-form-div-<?= $id ?>">
    <?php  $form = ActiveForm::begin(['id'=> $keyword.'-form-'.$id]); ?>
     <div id="<?= $keyword ?>-form-alert-<?= $id ?>"></div>

    <?= $form->field($model, 'fk_child')->hiddenInput()->label("") ?>

    <?= $form->field($model, 'mother')->textInput(['maxlength' => true])->label("Mother Names") ?>

    <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?php 
        echo $form->field($model, 'alive_status')->widget(Select2::classname(), [
            'data' => \app\models\Lookup::getLookupValues('YESNOUNKNOWN'),
            'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    ?>

    <?= $form->field($model, 'father')->textInput(['maxlength' => true])->label("Father Names") ?>

    <?php 
        echo $form->field($model, 'parent_stay_together')->widget(Select2::classname(), [
            'data' => \app\models\Lookup::getLookupValues('YESNO'),
            'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    ?>
    <?= $form->field($model, 'mother_county')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mother_subcounty')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mother_loc')->textInput(['maxlength' => true])->label("Mother Location") ?>

    <?= $form->field($model, 'mother_sub_loc')->textInput(['maxlength' => true])->label("Mother Sublocation") ?>

    <?= $form->field($model, 'mother_village')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'father_county')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'father_subcounty')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'father_loc')->textInput(['maxlength' => true])->label("Father Location") ?>

    <?= $form->field($model, 'father_subloc')->textInput(['maxlength' => true])->label("Father Sublocation") ?>

    <?= $form->field($model, 'father_village')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
         <?php $url =  Url::to([$model->isNewRecord?'create':'update','id'=>$model->id, 'keyword'=>$keyword, 'view'=>$view_file]); ?>
        <?= Html::submitButton('Save', ['class' =>'btn btn-success btn-create','onclick'=>"ajaxFormSubmit('$url','$keyword-form-div-$id','$keyword-form-$id',1); return false;"]) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
