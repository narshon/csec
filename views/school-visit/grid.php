<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\utilities\DataHelper;
use yii\helpers\Url;
?>

<div class="school-visit-index">

    <?php Pjax::begin(['id'=>'pjax-school-visit']); ?>
    <p>
        <?php
            $dh = new DataHelper();
            $url = Url::to(['school-visit/create', 'fk_child'=>$fk_child]);
            echo Html::a("Add School Visit", $url, ['class'=>'btn btn-primary pull-right btn-beneficiary'])
            #echo $dh->getModalButton(new \app\models\NeedAssessment(), 'create', "Add School Visit", 'btn btn-primary pull-right btn-beneficiary','Add School Visit',$url);
       ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'visit_date',
            'school_attendance',
            'reg_days_no',
            
            ['class' => 'yii\grid\ActionColumn',
            'template' => '{update}{delete}',
            'buttons' => [
                           
                    'update' => function ($url, $model, $fk_child) {
                            $dh = new DataHelper();
                            $url = Url::to(['//school-visit/update', 'fk_child'=>$fk_child, 'id'=>$model->id, 'view_file'=>'_form']);
                            return Html::a("", $url, ['class'=>'glyphicon glyphicon-edit pull-right']);
                            #return $dh->getModalButton(new \app\models\SchoolVisit(), "//school-visit/update", "Edit School Visit", 'glyphicon glyphicon-edit pull-right','',$url);

                    },
                    'delete' => function ($url, $model, $keyword) {
                        return Html::a('', ['//school-visit/delete', 'id'=>$model->id], ['class'=>'glyphicon glyphicon-remove pull-right',
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
