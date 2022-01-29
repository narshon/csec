<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Eligibility */

$this->title = 'Create Eligibility';
$this->params['breadcrumbs'][] = ['label' => 'Eligibilities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eligibility-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
