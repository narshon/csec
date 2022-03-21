<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\utilities\DataHelper;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel app\models\OtherSiblingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Other Siblings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="other-sibling-index">

    <?php Pjax::begin(['id'=>'pjax-other-sibling']); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <p>
    <?php
            $dh = new DataHelper();
            $url = Url::to(['other-sibling/create', 'fk_child'=>$fk_child]);
            echo $dh->getModalButton(new \app\models\OtherSibling(), 'create', "Add Sibling", 'btn btn-primary pull-right btn-beneficiary','Add Sibling',$url);
       ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'fk_child',
            'name_sibling',
            'nickname',
            'location',
            //'edu_empl',
            //'class',
            //'age',
            ['class' => 'yii\grid\ActionColumn',
            'template' => '{update}{delete}',
            'buttons' => [
                           
                    'update' => function ($url, $model, $keyword) {
                            $dh = new DataHelper();
                            $url = Url::to(['//other-sibling/update', 'id'=>$model->id]);
                        return $dh->getModalButton(new \app\models\OtherSibling(), "//other-sibling/update", "Edit Sibling", 'glyphicon glyphicon-edit pull-right','',$url);

                    },
                    'delete' => function ($url, $model, $keyword) {
                        return Html::a('', ['//other-sibling/delete', 'id'=>$model->id], ['class'=>'glyphicon glyphicon-remove pull-right',
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
