<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Consent */

$this->title = 'Create Consent';
$this->params['breadcrumbs'][] = ['label' => 'Consents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="consent-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
