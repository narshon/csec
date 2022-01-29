<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ChildSchool */

$this->title = 'Update Child School: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Child Schools', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="child-school-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
