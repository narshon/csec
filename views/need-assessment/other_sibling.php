<?php
use app\models\OtherSibling;
use app\models\OtherSiblingSearch;

$searchModel = new OtherSiblingSearch();
$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
$dataProvider->query->andWhere("fk_child = $model->fk_child");

?>
<?= $this->render("//other-sibling/index", [
    'searchModel' => $searchModel,
    'dataProvider' => $dataProvider,
    'fk_child' => $model->fk_child
]); ?>