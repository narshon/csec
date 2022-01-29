<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\HomeVisit */

$this->title = 'Create Home Visit';
$this->params['breadcrumbs'][] = ['label' => 'Home Visits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="home-visit-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
