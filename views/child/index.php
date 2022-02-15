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
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-success">
  <div class="panel-heading">
      <?= $this->title ?>
  </div>
  <div class="panel-body">
     
<div class="child-index">
<?php Pjax::begin(); ?>
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
        'fk_consent',
        'interview_date',
        'child_support_other',
        'child_support_org',
        //'child_support_service:ntext',
        //'child_name',
        'gender',
        ['class' => 'yii\grid\ActionColumn'],
    ],
]); ?>
<?php Pjax::end(); ?>
</div>

  </div>
  <div class="panel-footer">Panel footer</div>
</div>
