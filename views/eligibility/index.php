<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\EligibilitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Eligibilities';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eligibility-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Eligibility', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'child_code',
            'eligibility_date',
            'factor_family',
            'factor_env',
            //'factor_peer_pressure',
            //'factor_economic',
            //'factor_remark:ntext',
            //'age_range',
            //'child_attitude',
            //'caregiver_attitude',
            //'disability_level',
            //'age_remarks:ntext',
            //'child_attitude_rmk:ntext',
            //'caregiver_attitude_rmk:ntext',
            //'disability_level_rmk:ntext',
            //'kesho_kenya_rmk:ntext',
            //'kesho_staff_name',
            //'vetting_comm_rmk:ntext',
            //'chairperson_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
