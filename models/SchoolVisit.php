<?php

namespace app\models;

use Yii;
use yii\helpers\Url;
/**
 * This is the model class for table "{{%school_visit}}".
 *
 * @property int $id Record ID
 * @property int $fk_child
 * @property string $visit_date Date of visit
 * @property string $school_attendance School attendance
 * @property int $reg_days_no Regular attendance no.of days
 * @property int $irreg_days_no Irregular attendance No.of days
 * @property string $irreg_reasons irregular attendance reasons
 * @property string $class_particip Participation in class activities
 * @property string $passive_particip_reasons Reason for passive participation
 * @property string $student_dressing Teacher comment on student dressing
 * @property string $academic_perfom
 * @property string $academic_perform_report
 * @property string $extra_curr_act
 * @property string $discipline_level
 * @property string $discipline_why
 * @property string $outstanding_act
 * @property string $area_concern
 * @property string $follow_up
 * @property string $student_comment
 * @property string $teacher_comment
 * @property string $staff_name
 * @property string $staff_designation
 *
 * @property Child $fkChild
 */
class SchoolVisit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%school_visit}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fk_child', 'reg_days_no', 'irreg_days_no'], 'integer'],
            [['visit_date'], 'safe'],
            [['irreg_reasons', 'passive_particip_reasons', 'student_dressing', 'academic_perfom', 'discipline_why', 'outstanding_act', 'area_concern', 'follow_up', 'student_comment', 'teacher_comment'], 'string'],
            [['school_attendance', 'class_particip', 'discipline_level'], 'string', 'max' => 20],
            [['academic_perform_report', 'extra_curr_act'], 'string', 'max' => 100],
            [['staff_name', 'staff_designation'], 'string', 'max' => 200],
            [['fk_child'], 'exist', 'skipOnError' => true, 'targetClass' => Child::className(), 'targetAttribute' => ['fk_child' => 'id']],
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
            'visit_date' => 'Date of visit',
            'school_attendance' => 'School attendance',
            'reg_days_no' => 'Regular attendance no.of days',
            'irreg_days_no' => 'Irregular attendance No.of days',
            'irreg_reasons' => 'irregular attendance reasons',
            'class_particip' => 'Participation in class activities',
            'passive_particip_reasons' => 'Reason for passive participation',
            'student_dressing' => 'Teacher comment on student dressing',
            'academic_perfom' => 'Academic Perfom',
            'academic_perform_report' => 'Academic Perform Report',
            'extra_curr_act' => 'Extra Curr Act',
            'discipline_level' => 'Discipline Level',
            'discipline_why' => 'Discipline Why',
            'outstanding_act' => 'Outstanding Act',
            'area_concern' => 'Area Concern',
            'follow_up' => 'Follow Up',
            'student_comment' => 'Student Comment',
            'teacher_comment' => 'Teacher Comment',
            'staff_name' => 'Staff Name',
            'staff_designation' => 'Staff Designation',
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
                    return Url::to(['school-visit/update','id'=>$object->id]);
                }
                else{
                    #create mode
                    return Url::to(['school-visit/create']);
                }
                break;
             case "Consent":
                 $child = Child::find()->where(['fk_consent'=>$model->id])->one();
                 if($child){
                    $object = Self::find()->where(['fk_child'=>$child->id])->one();
                    if($object){
                        return Url::to(['school-visit/update','id'=>$object->id]);
                    }
                    else{
                        #create mode
                        return Url::to(['school-visit/create']);
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
                            return Url::to(['school-visit/update','id'=>$object->id]);
                        }
                        else{
                            #create mode
                            return Url::to(['school-visit/create']);
                        }
                     }
                     
                 }
                 break;
             case "SchoolVisit":
                return Url::to(['school-visit/update','id'=>$model->id]);
                break;
             default:
                $need = Self::find()->where(['fk_child'=>$fk_child])->one();
                if($need){
                    return Url::to(['school-visit/update','id'=>$need->id]);
                }
                else{
                    #create mode
                    return Url::to(['school-visit/index', 'fk_child'=>$fk_child]);
                }
                break;
         }
     }
}
