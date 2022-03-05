<?php

use yii\helpers\Html;
use app\models\Child;

/* @var $this yii\web\View */
/* @var $model app\models\Consent */

$this->title = 'Child Code: ' . $model->fkEligibilty->child_code;
$child = Child::find()->where(['fk_consent'=>$model->id])->one();
$fk_child = isset($child)?$child->id:NULL;

?>
<?= $this->render("//site/updateboard", ['model'=>$model, 'form'=>"//consent/_form",
            'form_name'=>"Consent Form", 'model_name'=>"Consent", 'fk_child'=>$fk_child]); ?>