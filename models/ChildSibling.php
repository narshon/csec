<?php

namespace app\models;
 
use Yii;
use yii\helpers\Url;
/**
 * This is the model class for table "{{%child_sibling}}".
 *
 * @property int $id
 * @property int $fk_child
 * @property int $s_order
 * @property string $s_name
 * @property string $occupation
 *
 * @property Child $fkChild
 */
class ChildSibling extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%child_sibling}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fk_child', 's_order'], 'integer'],
            [['s_name', 'occupation'], 'string', 'max' => 200],
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
            's_order' => 'S Order',
            's_name' => 'S Name',
            'occupation' => 'Occupation',
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
                $object = Self::find()->where(['fk_child'=>$model->id])->one();
                if($object){
                    return Url::to(['child-sibling/update','id'=>$object->id]);
                }
                else{
                    #create mode
                    return Url::to(['child-sibling/create']);
                }
                break;
             case "Consent":
                 $child = Child::find()->where(['fk_consent'=>$model->id])->one();
                 if($child){
                    $object = Self::find()->where(['fk_child'=>$child->id])->one();
                    if($object){
                        return Url::to(['child-sibling/update','id'=>$object->id]);
                    }
                    else{
                        #create mode
                        return Url::to(['child-sibling/create']);
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
                            return Url::to(['child-sibling/update','id'=>$object->id]);
                        }
                        else{
                            #create mode
                            return Url::to(['child-sibling/index', 'fk_child'=>$fk_child]);
                        }
                     }
                     
                 }
                 break;
             case "ChildSibling":
                return Url::to(['child-sibling/update','id'=>$model->id]);
                break;
             default:
                $object = Self::find()->where(['fk_child'=>$fk_child])->one();
                if($object){
                    return Url::to(['child-sibling/update','id'=>$object->id]);
                }
                else{
                    #create mode
                    return Url::to(['child-sibling/index', 'fk_child'=>$fk_child]);
                }
                break;
         }
    }
}
