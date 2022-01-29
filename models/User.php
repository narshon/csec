<?php

namespace app\models;
use yii\web\IdentityInterface;
use Yii;

/**
 * This is the model class for table "{{%csec_user}}".
 *
 * @property int $id
 * @property string $username
 * @property string $passwd
 * @property string $fname
 * @property string $mname
 * @property string $lname
 * @property string $designation
 * @property int $org_id
 *
 * @property CsecBeneficiary[] $csecBeneficiaries
 * @property CsecBeneficiary[] $csecBeneficiaries0
 */
class User extends \yii\db\ActiveRecord  implements IdentityInterface
{
    public $confirmpass;
    public $authKey;
    public $checkpass;
    public $emailpass;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username','email', 'role','org_id'],'required'],
            [['email'],'email'],
            [['org_id'],'integer'],
            [['username', 'fname', 'mname', 'lname', 'designation'], 'string', 'max' => 200],
            [['email', 'passwd','confirmpass', 'checkpass','emailpass'], 'string', 'max' => 500],
            [['passwd'], 'string', 'max' => 500],
            [['last_login','role'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'passwd' => 'Passwd',
            'fname' => 'Fname',
            'mname' => 'Mname',
            'lname' => 'Lname',
            'designation' => 'Designation',
            'role' => "Role",
            'org_id' => "Organization Name"
          
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCsecBeneficiaries()
    {
        return $this->hasMany(Beneficiary::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCsecBeneficiaries0()
    {
        return $this->hasMany(Beneficiary::className(), ['modified_by' => 'id']);
    }
    public function beforeSave($insert) {
        parent::beforeSave($insert);
        
          //hash the password
          
        if($this->checkpass == 1){
            
            if($this->passwd == ''){
                $this->addError('passwd', "Password is required.");
            }
            
            //check password
            # return $this->checkPasswords();
            if($this->checkPasswords()){
                
                $this->passwd =  Yii::$app->getSecurity()->generatePasswordHash($this->passwd); //md5($this->password);
            }
            else{
                $this->addError('passwd', "Passwords do not match.");
            }
        }
        
        
        if($this->hasErrors()){
              return false;
          }
          else{
            return true;
          }
    }
    public function afterSave($insert, $changedAttributes) {
        if($this->emailpass == 1){
            $this->emailPassword();
        }
        
        return parent::afterSave($insert, $changedAttributes);
    }
    
    public function checkPasswords(){
        
        if($this->passwd === $this->confirmpass){
            
            return true;
        }
        else{
           # return "Humu: ".$this->passwd." and ".$this->confirmpass;
            $this->addError('passwd', "Passwords do not match!"); //{$this->password} and Repeat: {$this->confirm_pass}
            return false;
        }
    }
    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
         return self::findOne($id);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        $users = self::find()->All();
        foreach ($users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }
     /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        $users = self::find()->All();
        foreach ($users as $user) {
            if (strcasecmp($user->username, $username) === 0) {
                return new static($user);
            }
        }

        return null;
    }
    public static function findUserByEmail($email){
        
        $users = self::find()->All();
        foreach ($users as $user) {
            if (strcasecmp($user->email, $email) === 0) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {  
       //return $this->pass === $password;
       if (Yii::$app->getSecurity()->validatePassword($password, $this->passwd)) {
           return true;
        } else {
            return false;
        }
    }
    
    public static function getUrl($type){
        
       if(Yii::$app->user->isGuest){
           return Url::to(['site/login']);
       }
       else{
           switch ($type){
               case "clinical_report":
                   return Url::to(['site/clinical']);
               case "lab_report":
                   return Url::to(['site/lab']);
               case "clinical_qc":
                   return Url::to(['site/qc']);
               case "lab_qc":
                   return Url::to(['site/labqc']);
               case "lab_storage":
                   return Url::to(['site/lab-storage']);
           }
       }
    }
    
    public static function isAdmin(){
        if(!Yii::$app->user->isGuest){
            $role = Yii::$app->user->identity->role;
            if($role == 1 || $role == 3){
                return true;
            }
            else{
                return false;
            }
        }
    }
    public static function isSysAdmin(){
        if(!Yii::$app->user->isGuest){
            $role = Yii::$app->user->identity->role;
            if($role == 1){
                return true;
            }
            else{
                return false;
            }
        }
    }
    public function loginStamp(){
        $model = $this->findone($this->id);
        if($model){
            $model->last_login = Date("Y-m-d H:i:s");
            $model->save(false);
        }
        
    }
    
    public function emailPassword(){
        //send email to this user
        Yii::$app->mailer->compose()
            ->setFrom(Yii::$app->params['adminEmail'])
            ->setTo($this->email)
            ->setSubject("CSEC Database Password Set Up!")
           // ->setTextBody('Plain text content')
            ->setHtmlBody("<p> Dear {$this->username} </p>"
                    . "<p> Your password for <a href='https://csec.keshokenya.or.ke'> CSEC Database </a> has been set up successfully. Please use the credentials below to login to our database: - </p>"
                    . "URL: <a href='https://csec.keshokenya.or.ke'> https://csec.keshokenya.or.ke </a>"."<br/>"
                    . "Username: ".$this->username."<br/>"
                    . "Password: ".$this->confirmpass."<br/>"
                    . "<p> Regards, <br/> CSEC Team <p>")
            ->send();
    }

    public static function getUserNames($user_id){
        $model = User::findone($user_id);
        if($model){
            return $model->fname." ".$model->mname." ".$model->lname;
        }
    }

    public function forgotPass(){
        //check if email present and send reset link to email
        $model = User::findone(['email'=>$this->email]);
        if($model){
            Yii::$app->mailer->compose()
            ->setFrom(Yii::$app->params['adminEmail'])
            ->setTo($model->email)
            ->setSubject("CSEC Database Password Reset!")
           // ->setTextBody('Plain text content')
            ->setHtmlBody("<p> Dear {$model->username}, </p>"
                    . "<p> Click on this link: <a href='https://csec.keshokenya.or.ke/web/index?r=site/resetpass&id={$model->id}'> Password Reset </a>, to proceed to resetting your password.</p>"
                    . "<p> Regards, <br/> CSEC Team <p>")
            ->send();

            return true;
        }else{
            return false;
        }
       
    }
}
