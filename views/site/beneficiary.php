<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\utilities\DataHelper;
use yii\helpers\Url;
use kartik\export\ExportMenu;
/* @var $this yii\web\View */
/* @var $searchModel app\models\BeneficiarySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Beneficiaries';
$this->params['breadcrumbs'][] = $this->title;
$ben_url= yii\helpers\Url::to(['site/beneficiary' ],true);
?>
<div class="panel panel-info chain-users-index">
      <div class="panel-heading"><h3><?= Html::encode($this->title) ?></h3></div>
      <div class="panel-body row">


<?php Pjax::begin(['id'=>'pjax-beneficiary']); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
       <?php
          $dh = new DataHelper();
            $url = Url::to(['beneficiary/create', 'id'=>0]);
           echo $dh->getModalButton(new \app\models\Beneficiary(), "beneficiary/create", "Beneficiary", 'btn btn-primary pull-right btn-beneficiary','Create A Beneficiary',$url);
           
           ?>
    </p>
    <?php
    $model = new \app\models\Beneficiary();
    $gridColumns  = $model->getGridColumns(); 
                

        // Renders a export dropdown menu
        echo ExportMenu::widget([
            'dataProvider' => $dataProvider,
            'columns' => $gridColumns
        ]);
    echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'rowOptions' => function ($model, $key, $index, $grid) {
            // $model is the current data model being rendered
            // check your condition in the if like `if($model->hasMedicalRecord())` which could be a method of model class which checks for medical records.
            if($model->flag_delete == 2) { 
                 return ['class' => 'highlighted_flag_delete'];
            }
            return [];
        },
        'columns' =>// $gridColumns
                    [
                       ['class' => 'yii\grid\SerialColumn'],

                       'id',
                       [
                        'label'=>'Names',
                        'format'=>'raw',
                         'attribute'=>'fname',
                         //'filter' => app\models\Lookup::getLookupValues("Gender"),
                         'value'=> function ($data){
                             return \app\models\Beneficiary::getNames($data->id);
                         }
                     ],
                     [
                        'label'=>'Gender',
                        'format'=>'raw',
                         'attribute'=>'gender',
                         'filter' => app\models\Lookup::getLookupValues("Gender"),
                         'value'=> function ($data){
                             return app\models\Lookup::getValue("Gender", $data->gender);
                         }
                     ],
                     'location',
                     [
                        'label'=>'Organization',
                        'format'=>'raw',
                         'attribute'=>'org_id',
                         'filter' => app\models\Lookup::getLookupValues("Organization Name"),
                         'value'=> function ($data){
                             return app\models\Lookup::getValue("Organization Name", $data->org_id);
                         }
                     ],
                     [
                        'label'=>'Type of CSEC',
                        'format'=>'raw',
                         'attribute'=>'type_csec',
                         'filter' => app\models\Lookup::getLookupValues("Type of CSEC"),
                         'value'=> function ($data){
                             return app\models\Lookup::getValue("Type of CSEC", $data->type_csec);
                         }
                     ],
                       'date_intake',
                       'unique_id',
                       //'child_status',
                      
                       ['class' => 'yii\grid\ActionColumn',
                       'template' => '{update}{delete}',
                       'buttons' => [

                                      'update' => function ($url, $model, $keyword) {
                                            $url = Url::to(['beneficiary/index','id'=>$model->id],true);
                                            $link = Html::a("",$url,['class'=>'glyphicon glyphicon-edit']);
                                            return $link."&nbsp;";
                                      },
                                      'delete' => function ($url, $model, $keyword) {
                                            $dh = new DataHelper();
                                            $url = Url::to(['beneficiary/customdelete','id'=>$model->id],true);
                                            $link  = $dh->getModalButton($model, "beneficiary/customdelete", "Beneficiary", 'glyphicon glyphicon-remove','',$url);
                                            return "&nbsp;".$link;
                                      }
                              ], 
                      ],
                   ]  
         
         
    ]); ?>
    <?php Pjax::end(); ?>

</div>
</div>




    