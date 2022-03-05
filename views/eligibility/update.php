<?php

use yii\helpers\Html;
use app\models\Consent;
use app\models\Child;

/* @var $this yii\web\View */
/* @var $model app\models\Eligibility */

$this->title = 'Child Code: ' . $model->child_code;

$consent = Consent::find()->where(['fk_eligibilty_id'=>$model->id])->one();
if($consent){
    $child = Child::find()->where(['fk_consent'=>$consent->id])->one();
    $fk_child = isset($child)?$child->id:NULL;
}
else{
    $fk_child = NULL;
}
?>

<?= $this->render("//site/updateboard", ['model'=>$model, 'form'=>"//eligibility/tabs",
            'form_name'=>"Eligibility Form", 'model_name'=>"Eligibility", 'fk_child'=>$fk_child]); ?>
