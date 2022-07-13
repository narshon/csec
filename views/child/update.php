<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Child */

$this->title = "Child Code: ". $model->fkConsent->fkEligibilty->child_code;
?>
<?= $this->render("//site/updateboard", ['model'=>$model, 'form'=>"//child/tabs",
            'form_name'=>"Identification Tool", 'model_name'=>"Child", 'fk_child'=>$model->id]); ?>
