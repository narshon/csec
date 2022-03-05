<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ChildSchool */

$this->title = "Child Code: ". $model->fkChild->fkConsent->fkEligibilty->child_code;
?> 
<?= $this->render("//site/updateboard", ['model'=>$model, 
                 'form'=>"//child-school/_form",
                 'form_name'=>" Child School Form",
                 'model_name'=>"ChildSchool"]); ?>
