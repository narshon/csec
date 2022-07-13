<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SchoolVisit */
$this->title = "Child Code: ". $model->fkChild->fkConsent->fkEligibilty->child_code;
?> 
<?= $this->render("//site/updateboard", ['model'=>$model, 
                 'form'=>"//school-visit/_form", 'fk_child'=>$model->fk_child,
                 'form_name'=>"School Visit Form", 'model_name'=>"SchoolVisit"]); ?>

