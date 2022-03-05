<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use kartik\date\DatePicker;
use kartik\select2\Select2;
use app\utilities\DataHelper;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Child */
/* @var $form yii\widgets\ActiveForm */
?>

<?php   $id = isset($model->id)?$model->id:0; $keyword = "child"; ?>
<div class="<?= $keyword ?>-form" id="<?= $keyword ?>-form-div-<?= $id ?>">
    <?php  $form = ActiveForm::begin(['id'=> $keyword.'-form-'.$id]); ?>
     <div id="<?= $keyword ?>-form-alert-<?= $id ?>"></div>

    <?= $form->field($model, 'child_code')->textInput() ?>

    <?= $form->field($model, 'child_init')->textInput() ?>

    
    <div class="form-group">
         <?php $url =  Url::to(['child/create','id'=>$model->id, 'keyword'=>$keyword]); ?>
        <?= Html::submitButton('Save', ['class' =>'btn btn-success btn-create','onclick'=>"ajaxFormSubmit('$url','$keyword-form-div-$id','$keyword-form-$id',1); return false;"]) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>