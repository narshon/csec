<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\utilities\DataHelper;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SchoolSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Schools';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="school-index">

    <?php Pjax::begin(['id'=>"pjax-school"]); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php
        $dh = new DataHelper();
        $url = Url::to(['school/create']);
        echo $dh->getModalButton(new \app\models\School(), 'create', "School", 'btn btn-primary pull-right btn-beneficiary','Add School',$url);
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'school_name',
            'location',

            ['class' => 'yii\grid\ActionColumn',
            'template' => '{update}{delete}',
            'buttons' => [
                           
                    'update' => function ($url, $model, $keyword) {
                            $dh = new DataHelper();
                            $url = Url::to(['//school/update', 'id'=>$model->id]);
                        return $dh->getModalButton(new \app\models\School(), "//school/update", "Edit School", 'glyphicon glyphicon-edit pull-right','',$url);

                    },
                    'delete' => function ($url, $model, $keyword) {
                        return Html::a('', ['//school/delete', 'id'=>$model->id], ['class'=>'glyphicon glyphicon-remove pull-right',
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
