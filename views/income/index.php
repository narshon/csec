<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\utilities\DataHelper;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IncomeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Incomes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="income-index">

    <?php Pjax::begin(['id'=>'pjax-income']); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
    <?php
            $dh = new DataHelper();
            $url = Url::to(['income/create', 'fk_child'=>$fk_child]);
            echo $dh->getModalButton(new \app\models\Income(), 'create', "Family Income", 'btn btn-primary pull-right btn-beneficiary','Add Family Income',$url);
       ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'child_relation',
            'job_type',
            'occupation',

            ['class' => 'yii\grid\ActionColumn',
            'template' => '{update}{delete}',
            'buttons' => [
                           
                    'update' => function ($url, $model, $keyword) {
                            $dh = new DataHelper();
                            $url = Url::to(['//income/update', 'id'=>$model->id]);
                        return $dh->getModalButton(new \app\models\Income(), "//income/update", "Edit Income", 'glyphicon glyphicon-edit pull-right','',$url);

                    },
                    'delete' => function ($url, $model, $keyword) {
                        return Html::a('', ['//income/delete', 'id'=>$model->id], ['class'=>'glyphicon glyphicon-remove pull-right',
                        'data' => [
                            'method' => 'post',
                             // use it if you want to confirm the action
                             'confirm' => 'Are you sure?',
                         ],
                            ]);
                    },
                   ], 
           ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
