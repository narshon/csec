<?php

namespace app\models;

use Yii;
use yii\helpers\Url;
/**
 * This is the model class for table "{{%child_school}}".
 *
 * @property int $id Record ID
 * @property int $fk_child
 * @property int $fk_school
 * @property string $class
 * @property string $stud_reg_no
 *
 * @property Child $fkChild
 * @property School $fkSchool
 */
class ChildSchool extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%child_school}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fk_child', 'fk_school'], 'integer'],
            [['class'], 'string', 'max' => 10],
            [['stud_reg_no'], 'string', 'max' => 100],
            [['fk_child'], 'exist', 'skipOnError' => true, 'targetClass' => Child::className(), 'targetAttribute' => ['fk_child' => 'id']],
            [['fk_school'], 'exist', 'skipOnError' => true, 'targetClass' => School::className(), 'targetAttribute' => ['fk_school' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Record ID',
            'fk_child' => 'Fk Child',
            'fk_school' => 'Fk School',
            'class' => 'Class',
            'stud_reg_no' => 'Stud Reg No',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkChild()
    {
        return $this->hasOne(Child::className(), ['id' => 'fk_child']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkSchool()
    {
        return $this->hasOne(School::className(), ['id' => 'fk_school']);
    }

    public function getForm($model_name, $model, $fk_child){
        switch($model_name){
             case "Child":
                $object = Self::find()->where(['fk_child'=>$model->id])->one();
                if($object){
                    return Url::to(['child-school/update','id'=>$object->id]);
                }
                else{
                    #create mode
                    return Url::to(['child-school/create']);
                }
                break;
             case "Consent":
                 $child = Child::find()->where(['fk_consent'=>$model->id])->one();
                 if($child){
                    $object = Self::find()->where(['fk_child'=>$child->id])->one();
                    if($object){
                        return Url::to(['child-school/update','id'=>$object->id]);
                    }
                    else{
                        #create mode
                        return Url::to(['child-school/create']);
                    }
                 }
                 break;
             case "Eligibility":
                 $consent = Consent::find()->where(['fk_eligibilty_id'=>$model->id])->one();
                 if($consent){
                     $child = Child::find()->where(['fk_consent'=>$consent->id])->one();
                     if($child){
                        $object = Self::find()->where(['fk_child'=>$fk_child])->one();
                        if($object){
                            return Url::to(['child-school/update','id'=>$object->id]);
                        }
                        else{
                            #create mode
                            return Url::to(['child-school/index', 'fk_child'=>$fk_child]);
                        }
                     }
                     
                 }
                 break;
             case "ChildSchool":
                return Url::to(['child-school/update','id'=>$model->id]);
                break;
             default:
                $need = Self::find()->where(['fk_child'=>$fk_child])->one();
                if($need){
                    return Url::to(['child-school/update','id'=>$need->id]);
                }
                else{
                    #create mode
                    return Url::to(['child-school/index', 'fk_child'=>$fk_child]);
                }
                break;
         }
     }
}
