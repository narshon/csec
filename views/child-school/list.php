<?php
use app\models\School;
use app\models\SchoolSearch;

$searchModel = new SchoolSearch();
$dataProvider = $searchModel->search(Yii::$app->request->queryParams);

?>
<?= $this->render("//school/index", [
    'searchModel' => $searchModel,
    'dataProvider' => $dataProvider
]); ?>