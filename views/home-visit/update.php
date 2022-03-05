<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HomeVisit */

$this->title = "Child Code: ". $model->fkConsent->fkEligibilty->child_code;
?> 
<?= $this->render("//site/updateboard", ['model'=>$model, 
                 'form'=>"//home-visit/_form",
                 'form_name'=>"Home Visit Form",'model_name'=>"HomeVisit"]); ?>