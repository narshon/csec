<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\models\Child;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ChildSchoolSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Child Schools';

$child = Child::findOne($fk_child); 
if($child){
    $this->title = "Child Code: ". $child->fkConsent->fkEligibilty->child_code;
}
?>
<?= $this->render("//site/updateboard", ['model'=>$model, 
                 'form'=>"//child-school/grid",
                 'form_name'=>"Child School Form", 'model_name'=>"ChildSchool",
                 'fk_child'=>$fk_child,
                 'searchModel' => $searchModel,
                 'dataProvider' => $dataProvider
                 ]); ?>
