<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\utilities\DataHelper;
use yii\helpers\Url;
use app\models\ChildSiblingSearch;
use app\models\ChildSibling;
?>

<div class="child-sibling-index">

    <?php Pjax::begin(['id'=>'pjax-child-sibling']); ?>
    <p>
        <?php
            $dh = new DataHelper();
            $url = Url::to(['child-sibling/create', 'fk_child'=>$model->id]);
            echo $dh->getModalButton(new \app\models\ChildSibling(), 'create', "Add Child Sibling", 'btn btn-primary pull-right btn-beneficiary','Add Child Sibling',$url);
       ?>
    </p>
    <?php
        $searchModel = new ChildSiblingSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere("fk_child = $model->id");
        $keyword = "child-sibling";
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            's_order',
            's_name',
            'occupation',

            ['class' => 'yii\grid\ActionColumn',
            'template' => '{update}{delete}',
            'buttons' => [
                           
                    'update' => function ($url, $model, $keyword) {
                            $dh = new DataHelper();
                            $url = Url::to(['//child-sibling/update', 'id'=>$model->id, 'view_file'=>'_form']);
                        return $dh->getModalButton(new \app\models\ChildSibling(), "//child-sibling/update", "Edit Sibling", 'glyphicon glyphicon-edit pull-right','',$url);

                    },
                    'delete' => function ($url, $model, $keyword) {
                        return Html::a('', ['//child-sibling/delete', 'id'=>$model->id], ['class'=>'glyphicon glyphicon-remove pull-right',
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
