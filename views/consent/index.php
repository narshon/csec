<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ConsentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Consents';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="consent-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Consent', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'fk_eligibilty_id',
            'consent_edu',
            'consent_legal',
            'consent_disability',
            //'consent_psycho',
            //'consent_comm',
            //'consent_health',
            //'consent_livelihood',
            //'consent_family',
            //'caregiver_init',
            //'caregiver_contact',
            //'child_init',
            //'staff_init',
            //'consent_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
