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

     <?php
        use app\models\Income;
        use app\models\IncomeSearch;

        $searchModel = new IncomeSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere("fk_child = $model->id");

    ?>
    <?= $this->render("//income/index", [
        'searchModel' => $searchModel,
        'dataProvider' => $dataProvider,
        'fk_child' => $model->id
    ]); ?>
     <?php 
        echo $form->field($model, 'fmember_income_sources')->widget(Select2::classname(), [
            'data' => \app\models\Lookup::getLookupValues('fmember_income_sources'),
            'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    ?>
    <?php 
        echo $form->field($model, 'income_regularity')->widget(Select2::classname(), [
            'data' => \app\models\Lookup::getLookupValues('income_regularity'),
            'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    ?>
    <?php 
        echo $form->field($model, 'household_indebt')->widget(Select2::classname(), [
            'data' => \app\models\Lookup::getLookupValues('household_indebt'),
            'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    ?>
    <?php 
        echo $form->field($model, 'household_assets')->widget(Select2::classname(), [
            'data' => \app\models\Lookup::getLookupValues('household_assets'),
            'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    ?>

    <?php 
        echo $form->field($model, 'household_tools')->widget(Select2::classname(), [
            'data' => \app\models\Lookup::getLookupValues('household_tools'),
            'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    ?>
    <?php 
        echo $form->field($model, 'hhold_educ_level')->widget(Select2::classname(), [
            'data' => \app\models\Lookup::getLookupValues('hhold_educ_level'),
            'options' => ['placeholder' => 'Please Select ...', 'multiple' => false],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    ?>
        


    <div class="form-group">
         <?php $url =  Url::to([$model->isNewRecord?'create':'update','id'=>$model->id, 'keyword'=>$keyword, 'view'=>$view_file]); ?>
        <?= Html::submitButton('Save', ['class' =>'btn btn-success btn-create pull-right','onclick'=>"ajaxFormSubmit('$url','$keyword-form-div-$id','$keyword-form-$id',1); return false;"]) ?>
    </div>



    <?php ActiveForm::end(); ?>

</div>
