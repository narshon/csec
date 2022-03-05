<?php

namespace app\models;

use Yii;
use yii\helpers\Url;
/**
 * This is the model class for table "{{%need_assessment}}".
 *
 * @property int $id
 * @property int $fk_child
 * @property string $location
 * @property string $phone
 * @property string $alive_status
 * @property string $mother
 * @property string $father
 *
 * @property Child $fkChild
 */
class NeedAssessment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%need_assessment}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fk_child'], 'integer'],
            [['location'], 'string', 'max' => 200],
            [['phone'], 'string', 'max' => 20],
            [['alive_status'], 'string', 'max' => 10],
            [['mother', 'father'], 'string', 'max' => 100],
            [['fk_child'], 'exist', 'skipOnError' => true, 'targetClass' => Child::className(), 'targetAttribute' => ['fk_child' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fk_child' => 'Fk Child',
            'location' => 'Location',
            'phone' => 'Phone',
            'alive_status' => 'Alive Status',
            'mother' => 'Mother',
            'father' => 'Father',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkChild()
    {
        return $this->hasOne(Child::className(), ['id' => 'fk_child']);
    }

    public function getForm($model_name, $model, $fk_child){
        switch($model_name){
             case "Child":
                #return "hapa";
                $object = Self::find()->where(['fk_child'=>$model->id])->one();
                if($object){
                    return Url::to(['need-assessment/update','id'=>$object->id]);
                }
                else{
                    return Url::to(['need-assessment/index', 'fk_child'=>$model->id]);
                }
                break;
             case "Consent":
                 $child = Child::find()->where(['fk_consent'=>$model->id])->one();
                 if($child){
                    $object = Self::find()->where(['fk_child'=>$child->id])->one();
                    if($object){
                        return Url::to(['need-assessment/update','id'=>$object->id]);
                    }
                    else{
                        return Url::to(['need-assessment/create', 'fk_child'=>$child->id]);
                    }
                 }
                 break;
             case "Eligibility":
                 $consent = Consent::find()->where(['fk_eligibilty_id'=>$model->id])->one();
                 if($consent){
                     $child = Child::find()->where(['fk_consent'=>$consent->id])->one();
                     if($child){
                        $object = Self::find()->where(['fk_child'=>$child->id])->one();
                        if($object){
                            return Url::to(['need-assessment/update','id'=>$object->id]);
                        }
                        else{
                            return Url::to(['need-assessment/create', 'fk_child'=>$child->id]);
                        }
                     }
                     
                 }
                 break;
             case "NeedAssessment":
                if($model){
                    $need = Self::find()->where(['fk_child'=>$model->fk_child])->one();
                    if($need){
                        return Url::to(['need-assessment/update','id'=>$need->id]);
                    }
                }
                else{
                    #create mode
                    return Url::to(['need-assessment/index', 'fk_child'=>$fk_child]);
                }
                break;
             default:
                $need = Self::find()->where(['fk_child'=>$fk_child])->one();
                if($need){
                    return Url::to(['need-assessment/update','id'=>$need->id]);
                }
                else{
                    #create mode
                    return Url::to(['need-assessment/create', 'fk_child'=>$fk_child]);
                }
                break;
         }
     }
}
