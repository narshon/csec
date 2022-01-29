<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HomeVisit */

$this->title = 'Update Home Visit: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Home Visits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="home-visit-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
