<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\OtherSibling */

$this->title = 'Create Other Sibling';
$this->params['breadcrumbs'][] = ['label' => 'Other Siblings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="other-sibling-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
