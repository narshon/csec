<?php

use yii\helpers\Html;
use yii\helpers\Url;
use app\models\Eligibility;
use app\models\Consent;
use app\models\Child;
use app\models\NeedAssessment;
use app\models\ChildSibling;
use app\models\HomeVisit;
use app\models\ChildSchool;
use app\models\SchoolVisit;

$fk_child = isset($fk_child)?$fk_child:NULL;
$searchModel = isset($searchModel)?$searchModel:NULL;
$dataProvider = isset($dataProvider)?$dataProvider:NULL;

?>

<div class="child-update container row">
    <div class="col-md-2">
        <ul class="list-group">
            <li class="list-group-item"><strong> Child Details </strong></li>
            <li class="list-group-item"><a href="<?php echo Child::secondaryMenu("Eligibility", $fk_child);  ?>">Eligibility form </a></li>
            <li class="list-group-item"><a href="<?php echo Child::secondaryMenu("Consent", $fk_child);  ?>">Consent form </a></li>
            <li class="list-group-item"><a href="<?php echo Child::secondaryMenu("Child", $fk_child);  ?>">Child Details </a></li>
            <li class="list-group-item"><a href="<?php echo Child::secondaryMenu("NeedAssessment", $fk_child);  ?>">Needs Assessment </a></li>
            <li class="list-group-item"><a href="<?php echo Child::secondaryMenu("ChildSibling", $fk_child);  ?>">Child Siblings </a></li>
            <li class="list-group-item"><a href="<?php echo Child::secondaryMenu("ChildSchool", $fk_child);  ?>">Child School </a></li>
            <li class="list-group-item"><a href="<?php echo Child::secondaryMenu("HomeVisit", $fk_child);  ?>">Home Visit </a></li>
            <li class="list-group-item"><a href="<?php echo Child::secondaryMenu("SchoolVisit", $fk_child);  ?>">School Visit </a></li>
        </ul>
    </div>
    <div class='col-md-10'>

        <div class="panel panel-primary">
            <div class="panel-heading">
                <span class='pull-left'> <strong> <?= $form_name ?> </strong> </span>
                <span class="pull-right"><strong> <?= Html::encode($this->title) ?></strong> </span>
                <div style="clear:both"></div>
            </div>
            
            <div class="panel-body">
                <?= $this->render($form, [
                    'model' => $model,
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
                    'fk_child' => $fk_child
                ]) ?>
            </div>
        </div>

    </div>

</div>
