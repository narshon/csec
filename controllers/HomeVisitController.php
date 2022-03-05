<?php

namespace app\controllers;

use Yii;
use app\models\HomeVisit;
use app\models\HomeVisitSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\utilities\DataHelper;
use yii\web\Response;
use yii\helpers\Url;
 
/**
 * HomeVisitController implements the CRUD actions for HomeVisit model.
 */
class HomeVisitController extends Controller
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
     * Lists all HomeVisit models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new HomeVisitSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single HomeVisit model.
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
     * Creates a new HomeVisit model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $keyword = "home-visit";
        $model = new HomeVisit();
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
     * Updates an existing HomeVisit model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id, $keyword = "home-visit")
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
     * Deletes an existing HomeVisit model.
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
     * Finds the HomeVisit model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return HomeVisit the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = HomeVisit::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
