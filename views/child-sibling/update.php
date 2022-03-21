<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ChildSibling */

# $this->title = "Child Code: ". $model->fkConsent->fkEligibilty->child_code;
?> 
<?= $this->render("//site/updateboard", ['model'=>$model, 
                 'form'=>"//child-sibling/_form",
                 'form_name'=>" Child Sibling Form",
                 'model_name'=>"ChildSibling"]); ?>