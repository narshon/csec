<?php

namespace app\controllers;

use Yii;
use app\models\Consent;
use app\models\ConsentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\utilities\DataHelper;
use yii\web\Response;
use yii\helpers\Url;

/** 
 * ConsentController implements the CRUD actions for Consent model.
 */
class ConsentController extends Controller
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
     * Lists all Consent models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ConsentSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Consent model.
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
     * Creates a new Consent model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($view='_form')
    {
        $model = new Consent();
        $keyword = 'consent';
        $dh = new DataHelper;
        if($model->load(Yii::$app->request->post())){
            if ( $model->save()) { 
                if (Yii::$app->request->isAjax)
                {   
                    $model->afterFind();
                    return $dh->processResponse($this, $model, $view, 'success', 'Successfully Saved!', 'pjax-'.$keyword, $keyword.'-form-alert-'.$model->id);                
                }
            }
        }
        else {
            if (Yii::$app->request->isAjax)
            {
                return $dh->processResponse($this, $model, $view, 'danger', 'Please fix the below errors!'.print_r($model->getErrors(),true), 'pjax-'.$keyword, $keyword.'-form-alert-'.$model->id);   
            }
            else{
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
        }
    }

    /**
     * Updates an existing Consent model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id, $keyword='consent', $view = "_form")
    {
        $model = $this->findModel($id);
        $dh = new DataHelper;
        if($model->load(Yii::$app->request->post())){
            if ( $model->save()) { 
                if (Yii::$app->request->isAjax)
                {   
                    $model->afterFind();
                    return $dh->processResponse($this, $model, $view, 'success', 'Successfully Saved!', 'pjax-'.$keyword, $keyword.'-form-alert-'.$model->id);                
                }
            }
        }
        else {
            if (Yii::$app->request->isAjax)
            {
                return $dh->processResponse($this, $model, $view, 'danger', 'Please fix the below errors!'.print_r($model->getErrors(),true), 'pjax-'.$keyword, $keyword.'-form-alert-'.$model->id);   
            }
            else{
                return $this->render('update', [
                    'model' => $model,
                ]);
            }
        }
    }

    /**
     * Deletes an existing Consent model.
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
     * Finds the Consent model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Consent the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Consent::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
