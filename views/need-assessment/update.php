<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\NeedAssessment */

$this->title = "Child Code: ". $model->fkChild->fkConsent->fkEligibilty->child_code;
?> 
<?= $this->render("//site/updateboard", ['model'=>$model, 
                 'form'=>"//need-assessment/tabs",
                 'form_name'=>"Need Assessment Form", 'model_name'=>"NeedAssessment"]); ?>