<?php

namespace app\controllers;

use Yii;
use app\models\ChildSibling;
use app\models\ChildSiblingSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\utilities\DataHelper;
use yii\web\Response;
use yii\helpers\Url;
 
/**
 * ChildSiblingController implements the CRUD actions for ChildSibling model.
 */
class ChildSiblingController extends Controller
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
     * Lists all ChildSibling models.
     * @return mixed
     */
    public function actionIndex($fk_child = 0)
    {
        $searchModel = new ChildSiblingSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere("fk_child = $fk_child");

        $model = ChildSibling::find()->where(['fk_child'=>$fk_child])->one();
        
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'fk_child' => $fk_child,
            'model' =>$model
        ]);
    }

    /**
     * Displays a single ChildSibling model.
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
     * Creates a new ChildSibling model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($fk_child=0)
    {
        $model = new ChildSibling();
        $keyword = 'child-sibling';
        $dh = new DataHelper;
        $model->fk_child = $fk_child;
        
        if($model->load(Yii::$app->request->post())){
            if ( $model->save()) { 
                if (Yii::$app->request->isAjax)
                {   
                    $model->afterFind();
                    return $dh->processResponse($this, $model, '_form', 'success', 'Successfully Saved!', 'pjax-'.$keyword, $keyword.'-form-alert-'.$model->id);                
                }
            }
        }
         else {
            if (Yii::$app->request->isAjax)
            {
                return $dh->processResponse($this, $model, '_form', 'danger', 'Please fix the below errors!'.print_r($model->getErrors(),true), 'pjax-'.$keyword, $keyword.'-form-alert-'.$model->id);   
            }
            else{
                return $this->render('create', [
                    'model' => $model,
                    'fk_child' => $fk_child
                ]);
            }
        }
    }

    /**
     * Updates an existing ChildSibling model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id, $keyword='update', $view_file='_form')
    {
        $model = $this->findModel($id);
        $dh = new DataHelper;
        if($model->load(Yii::$app->request->post()) && $model->save()){
                if (Yii::$app->request->isAjax)
                {   
                    $model->afterFind();
                    return $dh->processResponse($this, $model, '_form', 'success', 'Successfully Saved!', 'pjax-'.$keyword, $keyword.'-form-alert-'.$model->id);                
                }
        }
        else {
            if (Yii::$app->request->isAjax)
            {
                return $dh->processResponse($this, $model, '_form', 'danger', 'Please fix the below errors!'.print_r($model->getErrors(),true), 'pjax-'.$keyword, $keyword.'-form-alert-'.$model->id);   
            }
            else{
                return $this->render('update', [
                    'model' => $model,
                ]);
            }
        }
    }

    /**
     * Deletes an existing ChildSibling model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $fk_child = $model->fk_child;
        $model->delete();

        return $this->redirect(['index', 'fk_child'=>$fk_child]);
    }

    /**
     * Finds the ChildSibling model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ChildSibling the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ChildSibling::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
