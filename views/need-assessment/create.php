<?php

use yii\helpers\Html;
use app\models\Child;

/* @var $this yii\web\View */
/* @var $model app\models\NeedAssessment */

$child = Child::findOne($fk_child); 
if($child){
    $this->title = "Child Code: ". $child->fkConsent->fkEligibilty->child_code;
    $fk_child = $child->id;
}
else{
    $fk_child = NULL;
}
    
?> 
<?= $this->render("//site/updateboard", ['model'=>$model, 
                 'form'=>"//need-assessment/_form",
                 'form_name'=>"Need Assessment Form", 'model_name'=>"NeedAssessment",
                 'fk_child'=>$fk_child]); ?>
