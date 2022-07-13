<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\utilities\DataHelper;
use yii\helpers\Url;
?>

<div class="need-assessment-index">

    <?php Pjax::begin(['id'=>'pjax-need-assessment']); ?>
    <p>
        <?php
            $dh = new DataHelper();
            $url = Url::to(['need-assessment/create', 'fk_child'=>$fk_child]);
            echo $dh->getModalButton(new \app\models\NeedAssessment(), 'create', "Add Need Assessment", 'btn btn-primary pull-right btn-beneficiary','Add Need Assessment',$url);
       ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'location',
            'phone',
            'alive_status',
            //'mother',
            //'father',
            
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
