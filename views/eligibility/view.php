<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Eligibility */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Eligibilities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eligibility-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'child_code',
            'eligibility_date',
            'factor_family',
            'factor_env',
            'factor_peer_pressure',
            'factor_economic',
            'factor_remark:ntext',
            'age_range',
            'child_attitude',
            'caregiver_attitude',
            'disability_level',
            'age_remarks:ntext',
            'child_attitude_rmk:ntext',
            'caregiver_attitude_rmk:ntext',
            'disability_level_rmk:ntext',
            'kesho_kenya_rmk:ntext',
            'kesho_staff_name',
            'vetting_comm_rmk:ntext',
            'chairperson_name',
        ],
    ]) ?>

</div>
