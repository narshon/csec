<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\BeneficiarySearch;
use app\utilities\DataHelper;
use yii\helpers\Url;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        
        if(!Yii::$app->user->isGuest){
            $org_id = Yii::$app->user->identity->org_id;
            $role = Yii::$app->user->identity->role;
            $searchModel = new BeneficiarySearch();

            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
            if($role != 1 && $role != 3){ //return all records for role 1 and 3.
                $dataProvider->query->andWhere(" org_id = $org_id ");
            }
          
            return $this->render('index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        }
        else{
            return $this->redirect(['site/login']);
        }
    }
    public function actionBeneficiary()
    {
        
        if(!Yii::$app->user->isGuest){
            $org_id = Yii::$app->user->identity->org_id;
            $role = Yii::$app->user->identity->role;
            $searchModel = new BeneficiarySearch();

            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
            if($role != 1 && $role != 3){ //return all records for role 1 and 3.
                $dataProvider->query->andWhere(" org_id = $org_id ");
            }
          
            return $this->render('beneficiary', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        }
        else{
            return $this->redirect(['site/login']);
        }
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            
            Yii::$app->user->login($model->getUser(), $model->rememberMe ? 3600*24*30 : 0);
            //update last login stamp.
            Yii::$app->user->identity->loginStamp();
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Displays Forgot Password Form.
     *
     * @return string
     */
    public function actionForgotpass()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $model = new \app\models\User();
        $dh = new \app\utilities\DataHelper;
        $keyword = "forgotpass";
        
        
        if ($model->load(Yii::$app->request->post()) ) {
            
            Yii::$app->session->setFlash('forgotpasswordFormSubmitted');

            if($model->forgotPass()){
                return array(
                    'status'=>'', 
                    'message'=>"Success Message",
                    'div'=>"Check your email for password reset link. Click on the link to continue.",
                    'gridid'=>'',
                    'alert_div'=>''
                );
            }
            else{
                return array(
                    'status'=>'', 
                    'message'=>"Success Message",
                    'div'=>"The email address you provided was not found. Please contact your administrator.",
                    'gridid'=>'',
                    'alert_div'=>''
                );
                
            }

            
        }
        $message = "Fill the form below to continue.";
        
        $form = $this->renderAjax('forgotpass', ['model'=>$model]);
        return array(
            'status'=>'', 
            'message'=>$message,
            'div'=>$form,
            'gridid'=>'',
            'alert_div'=>''
        );
    }

    public function actionResetpass($id){
        $user = new \app\models\User;
        $model = $user->findone($id);
        $dh = new DataHelper;
        $keyword = 'user';
        $model->checkpass = 1;
        

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            //return $this->redirect(['view', 'id' => $model->id]);
            if (Yii::$app->request->isAjax)
            {   
                return $dh->processResponse($this, $model, 'setpassform', 'success', 'Successfully Saved!', 'pjax-'.$keyword, $keyword.'-form-alert-'.$model->id);                
            }
        } else {
            if (Yii::$app->request->isAjax)
            {
                return $dh->processResponse($this, $model, 'setpassform', 'danger', 'Please fix the below errors!', 'pjax-'.$keyword, $keyword.'-form-alert-'.$model->id);   
            }
            else{
                return $this->render('setpassform', [
                    'model' => $model,
                ]);
            }
        }
    }
   
}
