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
   
<?php   $id = isset($model->id)?$model->id:0; $keyword = "caregiver"; $view_file = 'caregiver' ?>
<div class="<?= $keyword ?>-form" id="<?= $keyword ?>-form-div-<?= $id ?>">
    <?php  $form = ActiveForm::begin(['id'=> $keyword.'-form-'.$id]); ?>
     <div id="<?= $keyword ?>-form-alert-<?= $id ?>"></div>

     <?php 
        echo $form->field($model, 'conflict_family')->widget(Select2::classname(), [
            'data' => \app\models\Lookup::getLookupValues('YESNO'),
            'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    ?>

    <?= $form->field($model, 'conflict_family_spec')->textArea(['cols' => 6]) ?>

    <?php 
        echo $form->field($model, 'mental_health_concern')->widget(Select2::classname(), [
            'data' => \app\models\Lookup::getLookupValues('YESNO'),
            'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    ?>

    <?= $form->field($model, 'mental_health_spec')->textArea(['cols' => 6]) ?>

    <?php 
        echo $form->field($model, 'family_sig_life_event')->widget(Select2::classname(), [
            'data' => \app\models\Lookup::getLookupValues('YESNO'),
            'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    ?>

    <?= $form->field($model, 'family_sig_life_spec')->textArea(['cols' => 6]) ?>

    <?= $form->field($model, 'pos_neg_events')->textArea(['cols' => 6]) ?>

    <?= $form->field($model, 'adults_relationship')->textArea(['cols' => 6]) ?>

    <?= $form->field($model, 'children_caregiver_relation')->textArea(['cols' => 6]) ?>

    <?php 
        echo $form->field($model, 'children_caregiver_confide')->widget(Select2::classname(), [
            'data' => \app\models\Lookup::getLookupValues('YESNO'),
            'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    ?>

    <?= $form->field($model, 'children_caregiver_confide_spec')->textArea(['cols' => 6]) ?>

    <?php 
        echo $form->field($model, 'children_caregiver_comfort')->widget(Select2::classname(), [
            'data' => \app\models\Lookup::getLookupValues('YESNO'),
            'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    ?>

    <?= $form->field($model, 'children_caregiver_comfort_spec')->textArea(['cols' => 6]) ?>

    <?= $form->field($model, 'children_caregiver_react')->textArea(['cols' => 6]) ?>

    <?= $form->field($model, 'children_caregiver_react_spec')->textArea(['cols' => 6]) ?>

    <?php 
        echo $form->field($model, 'children_caregiver_time')->widget(Select2::classname(), [
            'data' => \app\models\Lookup::getLookupValues('YESNO'),
            'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    ?>

    <?= $form->field($model, 'children_caregiver_time_spec')->textArea(['cols' => 6]) ?>

    <?= $form->field($model, 'children_caregiver_communication')->textArea(['cols' => 6]) ?>

    <?= $form->field($model, 'children_caregiver_encourage')->textArea(['cols' => 6]) ?>

    <?= $form->field($model, 'children_caregiver_misbehaviour')->textArea(['cols' => 6]) ?>

    <?php 
        echo $form->field($model, 'children_caregiver_free')->widget(Select2::classname(), [
            'data' => \app\models\Lookup::getLookupValues('YESNO'),
            'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    ?>

    <?php 
        echo $form->field($model, 'children_caregiver_decision')->widget(Select2::classname(), [
            'data' => \app\models\Lookup::getLookupValues('YESNO'),
            'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    ?>

    <?php 
        echo $form->field($model, 'child_curr_caregiver_attach')->widget(Select2::classname(), [
            'data' => \app\models\Lookup::getLookupValues('child_curr_caregiver_attach'),
            'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    ?>

    <?= $form->field($model, 'curr_caregiver_relation')->textArea(['cols' => 6]) ?>

    <?php 
        echo $form->field($model, 'child_prev_caregiver_attach')->widget(Select2::classname(), [
            'data' => \app\models\Lookup::getLookupValues('child_prev_caregiver_attach'),
            'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    ?>

    <?= $form->field($model, 'child_prev_caregiver_relation')->textArea(['cols' => 6]) ?>
    
    <?= $form->field($model, 'child_exhibit')->widget(Select2::classname(), [
            'data' => \app\models\Lookup::getLookupValues('child_exhibit'),
            'options' => ['placeholder' => 'Please Select ...', 'multiple' => true],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);  ?>

    <?= $form->field($model, 'behaviour_change')->textArea(['cols' => 6]) ?>

    <?= $form->field($model, 'daily_routine')->textArea(['cols' => 6]) ?>

    <?= $form->field($model, 'independence')->textArea(['cols' => 6]) ?>

    <?= $form->field($model, 'like')->textArea(['cols' => 6]) ?>

    <?= $form->field($model, 'dislike')->textArea(['cols' => 6]) ?>

    <?= $form->field($model, 'fear')->textArea(['cols' => 6]) ?>

    <?= $form->field($model, 'skill')->textArea(['cols' => 6]) ?>

    <div class="form-group">
         <?php $url =  Url::to([$model->isNewRecord?'create':'update','id'=>$model->id, 'keyword'=>$keyword, 'view'=>$view_file]); ?>
        <?= Html::submitButton('Save', ['class' =>'btn btn-success btn-create','onclick'=>"ajaxFormSubmit('$url','$keyword-form-div-$id','$keyword-form-$id',1); return false;"]) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
