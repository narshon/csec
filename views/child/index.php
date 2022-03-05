<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\utilities\DataHelper;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ChildSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Children';

?>
<div class="panel panel-success">
  <div class="panel-heading">
      <?= $this->title ?>
  </div>
  <div class="panel-body">
     
<div class="child-index">
<?php Pjax::begin(['class'=>"pjax-child"]); ?>
<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<p>
    <?php
        $dh = new DataHelper();
        $url = Url::to(['child/create', 'id'=>0]);
       echo $dh->getModalButton(new \app\models\Child(), "child/create", "CSEC BAF Child", 'btn btn-primary pull-right btn-beneficiary','Create A Child',$url);
    ?>
</p>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        'id',
        'age',
        [
            'label'=>'Child Code',
            'format'=>'raw',
             'attribute'=>'child_code',
             //'filter' => app\models\Lookup::getLookupValues("Gender"),
             'value'=> function ($data){
                 return \app\models\Eligibility::getChildCode($data->fk_consent);
             }
         ],
        [
            'label'=>'Child Initials',
            'format'=>'raw',
             'attribute'=>'child_init',
             //'filter' => app\models\Lookup::getLookupValues("Gender"),
             'value'=> function ($data){
                 return \app\models\Consent::getChildInitials($data->fk_consent);
             }
         ],
         [
            'label'=>'Eligibility Date',
            'format'=>'raw',
             'attribute'=>'eligibility_date',
             //'filter' => app\models\Lookup::getLookupValues("Gender"),
             'value'=> function ($data){
                 return \app\models\Eligibility::getEligibilityDate($data->fk_consent);
             }
         ],
         [
            'label'=>'Interview Date',
            'format'=>'raw',
             'attribute'=>'interview_date',
             //'filter' => app\models\Lookup::getLookupValues("Gender"),
             'value'=> function ($data){
                 return $data->interview_date;
             }
         ],
         [
            'label'=>'Gender',
            'format'=>'raw',
             'attribute'=>'gender',
             //'filter' => app\models\Lookup::getLookupValues("Gender"),
             'value'=> function ($data){
                 return $data->gender;
             }
         ],
         [
            'label'=>'Age',
            'format'=>'raw',
             'attribute'=>'age',
             //'filter' => app\models\Lookup::getLookupValues("Gender"),
             'value'=> function ($data){
                 return $data->age;
             }
         ],
         [
            'label'=>'Child Support Org.',
            'format'=>'raw',
             'attribute'=>'child_support_org',
             //'filter' => app\models\Lookup::getLookupValues("Gender"),
             'value'=> function ($data){
                 return $data->child_support_org;
             }
         ],
        
        ['class' => 'yii\grid\ActionColumn'],
    ],
]); ?>
<?php Pjax::end(); ?>
</div>

  </div>
  <div class="panel-footer">Panel footer</div>
</div>
