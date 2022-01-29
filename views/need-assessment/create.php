<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\NeedAssessment */

$this->title = 'Create Need Assessment';
$this->params['breadcrumbs'][] = ['label' => 'Need Assessments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="need-assessment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
