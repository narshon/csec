<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SchoolVisit */

$this->title = 'Create School Visit';
$this->params['breadcrumbs'][] = ['label' => 'School Visits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="school-visit-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
