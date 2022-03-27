<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\utilities\DataHelper;
use yii\helpers\Url;
?>

<ul class="nav nav-tabs">

  <li class="active"><a data-toggle="tab" href="#child-school">Child School</a></li>
  <li><a data-toggle="tab" href="#schools-list">Schools List</a></li>

</ul>

<div class="tab-content">
    <div id="child-school" class="child-school-index tab-pane fade in active">

    <?php Pjax::begin(['id'=>'pjax-child-school']); ?>
    <p>
        <?php
            $dh = new DataHelper();
            $url = Url::to(['child-school/create', 'fk_child'=>$fk_child]);
            echo $dh->getModalButton(new \app\models\ChildSchool(), 'create', "Add Child School", 'btn btn-primary pull-right btn-beneficiary','Add Child School',$url);
    ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'fk_child',
            'fk_school',
            'class',
            'stud_reg_no',

            ['class' => 'yii\grid\ActionColumn',
            'template' => '{update}{delete}',
            'buttons' => [
                        
                    'update' => function ($url, $model, $keyword) {
                            $dh = new DataHelper();
                            $url = Url::to(['//child-school/update', 'id'=>$model->id, 'view_file'=>'_form']);
                        return $dh->getModalButton(new \app\models\ChildSchool(), "//child-school/update", "Edit School", 'glyphicon glyphicon-edit pull-right','',$url);

                    },
                    'delete' => function ($url, $model, $keyword) {
                        return Html::a('', ['//child-school/delete', 'id'=>$model->id], ['class'=>'glyphicon glyphicon-remove pull-right',
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
    <div id="schools-list" class="tab-pane fade">
        <?= $this->render("list"); ?>
    </div>
</div>

