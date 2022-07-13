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
use yii\web\UploadedFile;

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
    public function actionIndex($fk_child = 0)
    {
        $searchModel = new SchoolVisitSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere("fk_child = $fk_child");

        $model = SchoolVisit::find()->where(['fk_child'=>$fk_child])->one();
        
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'fk_child' => $fk_child,
            'model' =>$model
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
    public function actionCreate($fk_child=0)
    {
        $keyword = "school-visit";
        $model = new SchoolVisit();
        $dh = new DataHelper;
        $model->fk_child = $fk_child;

        if($model->load(Yii::$app->request->post()) && $model->save()){
            
            #process file upload
            Yii::$app->params['uploadPath'] = Yii::$app->basePath.'\\web\\docs\\';
            $model->academic_perform_report = UploadedFile::getInstance($model, 'academic_perform_report');

            if($model->academic_perform_report){ print("Here"); exit;
                $file_name = $model->academic_perform_report->baseName . '.' . $model->academic_perform_report->extension;
                $model->academic_perform_report->saveAs(Yii::$app->params['uploadPath'] . $file_name);
                $model->academic_perform_report = $file_name;
                $model->save();
            }
           #echo "Hapa"; echo $model->id;  exit;
            #'model' => $model, 'fk_child'=>$model->fk_child,
            return $this->redirect([ 'update', 'id'=> $model->id ]);
            
        }
        else {
            
                return $this->render('create', [
                    'model' => $model, 'fk_child'=>$model->fk_child
                ]);
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
        
        if($model->load(Yii::$app->request->post()) && $model->save()){
            
            #process file upload
            Yii::$app->params['uploadPath'] = Yii::$app->basePath.'\\web\\docs\\';
            $model->academic_perform_report = UploadedFile::getInstance($model, 'academic_perform_report');
            if($model->academic_perform_report){
                $file_name = $model->academic_perform_report->baseName . '.' . $model->academic_perform_report->extension;
                $model->academic_perform_report->saveAs(Yii::$app->params['uploadPath'] . $file_name);
                $model->academic_perform_report = $file_name;
                $model->save();
            }

            return $this->render('update', [
                'model' => $model, 'fk_child'=>$model->fk_child, 'id'=>$model->id
            ]);
            
        }
        else {
            
                return $this->render('update', [
                    'model' => $model, 'fk_child'=>$model->fk_child, 'id'=>$model->id
                ]);
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
        $model = $this->findModel($id);
        $fk_child = $model->fk_child;
        $model->delete();

        return $this->redirect(['index', 'fk_child'=>$fk_child]);
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
