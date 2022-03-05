<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SchoolVisit */

$this->title = "Child Code: ". $model->fkConsent->fkEligibilty->child_code;
?> 
<?= $this->render("//site/updateboard", ['model'=>$model, 
                 'form'=>"//school-visit/_form",
                 'form_name'=>"School Visit Form", 'model_name'=>"SchoolVisit"]); ?>