<?php

namespace app\controllers;

use Yii;
use app\models\SchoolVisit;
use app\models\SchoolVisitSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\utilities\DataHelper;
use yii\web\Response;
use yii\helpers\Url;

/** 
 * SchoolVisitController implements the CRUD actions for SchoolVisit model.
 */
class SchoolVisitController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all SchoolVisit models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SchoolVisitSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SchoolVisit model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

        /**
     * Creates a new SchoolVisit model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $keyword = "school-visit";
        $model = new SchoolVisit();
        $dh = new DataHelper;
        if($model->load(Yii::$app->request->post())){
            if ( $model->save()) { 
                if (Yii::$app->request->isAjax)
                {   
                    $model->afterFind();
                    return $dh->processResponse($this, $model, $keyword, 'success', 'Successfully Saved!', 'pjax-'.$keyword, $keyword.'-form-alert-'.$model->id);                
                }
            }
        }
         else {
            if (Yii::$app->request->isAjax)
            {
                return $dh->processResponse($this, $model, $keyword, 'danger', 'Please fix the below errors!'.print_r($model->getErrors(),true), 'pjax-'.$keyword, $keyword.'-form-alert-'.$model->id);   
            }
            else{
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
        }
    }

    /**
     * Updates an existing SchoolVisit model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id, $keyword = "school-visit")
    {
        $model = $this->findModel($id);
        $dh = new DataHelper;
        if($model->load(Yii::$app->request->post())){
            if ( $model->save()) { 
                if (Yii::$app->request->isAjax)
                {   
                    $model->afterFind();
                    return $dh->processResponse($this, $model, $keyword, 'success', 'Successfully Saved!', 'pjax-'.$keyword, $keyword.'-form-alert-'.$model->id);                
                }
            }
        }
        else {
            if (Yii::$app->request->isAjax)
            {
                return $dh->processResponse($this, $model, $keyword, 'danger', 'Please fix the below errors!'.print_r($model->getErrors(),true), 'pjax-'.$keyword, $keyword.'-form-alert-'.$model->id);   
            }
            else{
                return $this->render('update', [
                    'model' => $model,
                ]);
            }
        }
    }

    /**
     * Deletes an existing SchoolVisit model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SchoolVisit model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return SchoolVisit the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SchoolVisit::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
