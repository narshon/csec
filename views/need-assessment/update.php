<?php

use yii\helpers\Html;
use app\models\Child;

/* @var $this yii\web\View */
/* @var $model app\models\NeedAssessment */

$this->title = "Child Code: ". $model->fkChild->fkConsent->fkEligibilty->child_code;
$child = Child::findOne($model->fk_child); 

?> 
<?= $this->render("//site/updateboard", ['model'=>$model, 
                 'form'=>"//need-assessment/tabs",
                 'fk_child' => $model->fk_child,
                 'form_name'=>"Need Assessment Form", 'model_name'=>"NeedAssessment"]); ?>