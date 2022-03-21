<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\models\Child;
/* @var $this yii\web\View */
/* @var $searchModel app\models\NeedAssessmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Need Assessments';
$child = Child::findOne($fk_child); 
if($child){
    $this->title = "Child Code: ". $child->fkConsent->fkEligibilty->child_code;
}
?>
<?= $this->render("//site/updateboard", ['model'=>$model, 
                 'form'=>"//need-assessment/grid",
                 'form_name'=>"Need Assessment Form", 'model_name'=>"NeedAssessment",
                 'fk_child'=>$fk_child,
                 'searchModel' => $searchModel,
                 'dataProvider' => $dataProvider
                 ]); ?>