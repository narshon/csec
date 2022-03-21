<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\models\Child;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HomeVisitSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Home Visits';

$child = Child::findOne($fk_child); 
if($child){
    $this->title = "Child Code: ". $child->fkConsent->fkEligibilty->child_code;
}
?>
<?= $this->render("//site/updateboard", ['model'=>$model, 
                 'form'=>"//home-visit/grid",
                 'form_name'=>"Home Visit Form", 'model_name'=>"HomeVisit",
                 'fk_child'=>$fk_child,
                 'searchModel' => $searchModel,
                 'dataProvider' => $dataProvider
                 ]); ?>
