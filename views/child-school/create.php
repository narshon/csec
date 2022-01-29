<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ChildSchool */

$this->title = 'Create Child School';
$this->params['breadcrumbs'][] = ['label' => 'Child Schools', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="child-school-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
