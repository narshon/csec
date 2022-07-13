<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\utilities\DataHelper;
use yii\helpers\Url;
?>

<div class="home-visit-index">

    <?php Pjax::begin(['id'=>'pjax-home-visit']); ?>
    <p>
        <?php
            $dh = new DataHelper();
            $url = Url::to(['home-visit/create', 'fk_child'=>$fk_child]);
            echo $dh->getModalButton(new \app\models\HomeVisit(), 'create', "Add Home Visit", 'btn btn-primary pull-right btn-beneficiary','Add Home Visit',$url);
       ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'home_visit_date',
            'visit_no',
            'case_file_no',
            //'life_change:ntext',
            //'change_effect:ntext',

            ['class' => 'yii\grid\ActionColumn',
            'template' => '{update}{delete}',
            'buttons' => [
                           
                    'update' => function ($url, $model, $keyword) {
                            $dh = new DataHelper();
                            $url = Url::to(['//home-visit/update', 'id'=>$model->id, 'view_file'=>'_form']);
                        return $dh->getModalButton(new \app\models\HomeVisit(), "//home-visit/update", "Edit Home Visit", 'glyphicon glyphicon-edit pull-right','',$url);

                    },
                    'delete' => function ($url, $model, $keyword) {
                        return Html::a('', ['//home-visit/delete', 'id'=>$model->id], ['class'=>'glyphicon glyphicon-remove pull-right',
                        'data' => [
                                    'method' => 'post',
                                    // use it if you want to confirm the action
                                    'confirm' => 'Are you sure?',
                                ],
                            ]);
                    },
                   ], 
           ]
        ],
    ]); ?>
    
    <?php Pjax::end(); ?>
</div>
