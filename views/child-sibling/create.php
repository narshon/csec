<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ChildSibling */

$this->title = 'Create Child Sibling';
$this->params['breadcrumbs'][] = ['label' => 'Child Siblings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="child-sibling-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
