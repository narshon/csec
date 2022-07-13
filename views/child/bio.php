<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use kartik\depdrop\DepDrop;


/* @var $this yii\web\View */
/* @var $model app\models\Eligibility */
/* @var $form yii\widgets\ActiveForm */
?>

<?php   $id = isset($model->id)?$model->id:0; $keyword = "bio"; $view_file = 'bio';?>
<div class="<?= $keyword ?>-form" id="<?= $keyword ?>-form-div-<?= $id ?>">
    <?php  $form = ActiveForm::begin(['id'=> $keyword.'-form-'.$id]); ?>
     <div id="<?= $keyword ?>-form-alert-<?= $id ?>"></div>

    <?= $form->field($model, 'child_init')->textInput() ?>


    <?= $form->field($model, 'interview_date')->widget(DatePicker::className(),[
            'removeButton' => false,
            'type' => DatePicker::TYPE_COMPONENT_APPEND,
            'pluginOptions' => [
                'autoclose'=>true,
                'format' => 'yyyy-mm-dd'
            ]
    ]) ?>
    <?php 
        echo $form->field($model, 'child_support_other')->widget(Select2::classname(), [
            'data' => \app\models\Lookup::getLookupValues('YESNO'),
            'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    ?>

    <?= $form->field($model, 'child_support_org')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'child_support_service')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'child_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender')->widget(Select2::classname(), [
            'data' => \app\models\Lookup::getLookupValues('Gender'),
            'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);   ?>

    <?= $form->field($model, 'dob')->widget(DatePicker::className(),[
            'removeButton' => false,
            'type' => DatePicker::TYPE_COMPONENT_APPEND,
            'pluginOptions' => [
                'autoclose'=>true,
                'format' => 'yyyy-mm-dd'
            ]
    ]) ?>


    <?= $form->field($model, 'age')->textInput() ?>

    <?= $form->field($model, 'disability')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'school_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'child_educ_level')->widget(Select2::classname(), [
            'data' => \app\models\Lookup::getLookupValues('Level Education'),
            'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);  
    ?>

    <?= $form->field($model, 'class')->widget(DepDrop::classname(), [
    'options'=>['placeholder' => 'Please Select ...', 'multiple' => false, 'id'=>'child-class-id'],
    'pluginOptions'=>[
        'depends'=>['child-child_educ_level'],
        'placeholder'=>'Select...',
        'url'=>Url::to(['/child/class'])
        ]
     ]); 
    ?>

    <?= $form->field($model, 'country')->widget(Select2::classname(), [
            'data' => \app\models\Lookup::getLookupValues('county'),
            'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ])->label("County");   ?>

    <?= $form->field($model, 'sub_county')->widget(Select2::classname(), [
            'data' => \app\models\Lookup::getLookupValues('subcounty'),
            'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); ?>

    <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'landmark')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'landmark_name')->textInput(['maxlength' => true]) ?>
            


    <div class="form-group">
         <?php $url =  Url::to([$model->isNewRecord?'create':'update','id'=>$model->id, 'keyword'=>$keyword, 'view'=>$view_file]); ?>
        <?= Html::submitButton('Save', ['class' =>'btn btn-success btn-create pull-right','onclick'=>"ajaxFormSubmit('$url','$keyword-form-div-$id','$keyword-form-$id',1); return false;"]) ?>
    </div>



    <?php ActiveForm::end(); ?>

</div>
