<?php

namespace app\models;

use Yii;
use yii\helpers\Url;
/**
 * This is the model class for table "{{%child}}".
 *
 * @property int $id Record ID
 * @property int $fk_consent
 * @property string $interview_date Date of Identification
 * @property string $child_support_other Is the child enlisted for support with other organisations
 * @property string $child_support_org Name of organisation
 * @property string $child_support_service Child service
 * @property string $child_name Child name
 * @property string $gender
 * @property string $dob
 * @property int $age Age in years
 * @property string $disability If disabled differently
 * @property string $school_name School Name
 * @property string $child_educ_level Level of Education
 * @property string $class Class/Form
 * @property string $country Country
 * @property string $sub_county Sub County
 * @property string $location Location/Village
 * @property string $landmark Nearby landmark
 * @property string $landmark_name
 * @property int $child_school_attendance Child school attendance in the last 6-12 months
 * @property string $not_regular_reason If not regular , give reasons
 * @property int $meal_per_day Meals family have per day
 * @property string $child_chronic_ill child chronic illness
 * @property string $child_chronic_ill_spec Family member chronic illness
 * @property string $fmember_chronic_ill Family member with chronic illness
 * @property string $fmember_chronic_ill_spec
 * @property string $parent_alive Are both parents alive
 * @property string $who_alive
 * @property string $stay_together
 * @property int $fwife_number How many wifes does your father have
 * @property string $child_live_with Who does the child live with
 * @property int $sibling_no How many siblings do you have
 * @property int $sibling_order_9_15
 * @property int $sibling_order_16_20 Order of siblings from oldest to youngest
 * @property int $sibling_order_21_25
 * @property int $sibling_order_26_30
 * @property int $sibling_order_31_35
 * @property int $sibling_order_35_above
 * @property string $father_name
 * @property int $father_contact
 * @property string $mother_name
 * @property int $mother_contact
 * @property string $caregiver_name
 * @property int $caregiver_contact
 * @property string $other_name
 * @property int $other_name_contact
 * @property int $fmember_income_no Family members over 18 years access to income
 * @property int $fmember_income_sources
 * @property int $income_regularity Regularity of income
 * @property int $household_indebt Household present indebtness to meet basic needs
 * @property int $household_assets Household acess to natural resources
 * @property int $household_tools Household tools and infrastructure
 * @property string $hhold_educ_level Level of education
 * @property string $sex_exploit Nature of sexual exploitaion
 * @property string $exploit_happen_when When exploitaion happened
 * @property string $exploit_continue Is it continuing
 * @property int $exploit_month
 * @property int $exploit_year
 * @property int $exploit_reported Has exploitaion been reported
 * @property int $exploit_reported_to Exploit reported to who
 * @property string $exploit_rpt_to_spec
 * @property string $exploit_notreported_reason Why child didnt report case to anyone
 * @property string $other_detail Other details noted during interview
 * @property string $child_init
 * @property string $caregiver_interview_name
 * @property int $caregiver_interview_contact Contact of caregiver
 * @property string $caregiver_interview_date Date caregiver gave information
 * @property string $kesho_staff_name Kesho Kenya child protection staff detail
 * @property int $kesho_staff_contact Kesho Kenya staff contact
 * @property string $kesho_staff_interview_date Date Kesho Kenya staff gave details
 * @property string $kesho_designation Kesho Kenya staff designation
 * 
 * @property Consent $fkConsent
 * @property ChildSchool[] $childSchools
 * @property ChildSibling[] $childSiblings
 * @property HomeVisit[] $homeVisits
 * @property NeedAssessment[] $needAssessments
 * @property CsesSchoolVisit[] $csesSchoolVisits
 */
class Child extends \yii\db\ActiveRecord
{
    public $child_code;
    public $child_init;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%child}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fk_consent', 'age', 'child_school_attendance', 'meal_per_day', 'fwife_number', 'sibling_no', 'sibling_order_9_15', 'sibling_order_16_20', 'sibling_order_21_25', 'sibling_order_26_30', 'sibling_order_31_35', 'sibling_order_35_above', 'father_contact', 'mother_contact', 'caregiver_contact', 'other_name_contact', 'fmember_income_no','fmember_income_sources', 'income_regularity', 'household_indebt', 'household_assets', 'household_tools', 'exploit_month', 'exploit_year', 'exploit_reported', 'exploit_reported_to', 'caregiver_interview_contact', 'kesho_staff_contact'], 'integer'],
            [['interview_date', 'dob', 'caregiver_interview_date', 'kesho_staff_interview_date'], 'safe'],
            [['child_support_service', 'not_regular_reason', 'sex_exploit', 'exploit_rpt_to_spec', 'exploit_notreported_reason', 'other_detail'], 'string'],
            [['child_support_other', 'child_chronic_ill', 'fmember_chronic_ill', 'parent_alive', 'stay_together'], 'string', 'max' => 5],
            [['child_support_org', 'disability', 'school_name', 'child_educ_level', 'country', 'sub_county', 'location', 'landmark', 'landmark_name', 'child_live_with', 'father_name', 'mother_name', 'caregiver_name', 'other_name', 'exploit_happen_when', 'exploit_continue', 'kesho_staff_name', 'kesho_designation'], 'string', 'max' => 20],
            [['child_name', 'gender', 'class', 'who_alive', 'child_init', 'caregiver_interview_name'], 'string', 'max' => 10],
            [['child_chronic_ill_spec', 'fmember_chronic_ill_spec'], 'string', 'max' => 50],
            [['hhold_educ_level', 'child_code'], 'string', 'max' => 100],
            [['fk_consent'], 'exist', 'skipOnError' => true, 'targetClass' => Consent::className(), 'targetAttribute' => ['fk_consent' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Record ID',
            'fk_consent' => 'Fk Consent',
            'interview_date' => 'Date of Identification',
            'child_support_other' => 'Is the child enlisted for support with other organisations',
            'child_support_org' => 'Name of organisation',
            'child_support_service' => 'Child service',
            'child_name' => 'Child name',
            'gender' => 'Gender',
            'dob' => 'Dob',
            'age' => 'Age in years',
            'disability' => 'If disabled differently',
            'school_name' => 'School Name',
            'child_educ_level' => 'Level of Education',
            'class' => 'Class/Form',
            'country' => 'Country',
            'sub_county' => 'Sub County',
            'location' => 'Location/Village',
            'landmark' => 'Nearby landmark',
            'landmark_name' => 'Landmark Name',
            'child_school_attendance' => 'Child school attendance in the last 6-12 months',
            'not_regular_reason' => 'If not regular , give reasons',
            'meal_per_day' => 'Meals family have per day',
            'child_chronic_ill' => 'Child chronic illness',
            'child_chronic_ill_spec' => 'If Yes, Specify',
            'fmember_chronic_ill' => 'Family member with chronic illness',
            'fmember_chronic_ill_spec' => 'If Yes, Specify',
            'parent_alive' => 'Are both parents alive',
            'who_alive' => 'If no, Who is Alive?',
            'stay_together' => 'If alive, do they Stay together',
            'fwife_number' => 'How many wifes does your father have',
            'child_live_with' => 'Who does the child live with',
            'sibling_no' => 'How many siblings do you have',
            'sibling_order_9_15' => 'Sibling age  09 - 25',
            'sibling_order_16_20' => 'Sibling age 16 - 20',
            'sibling_order_21_25' => 'Sibling age 21 - 25',
            'sibling_order_26_30' => 'Sibling age 26 - 30',
            'sibling_order_31_35' => 'Sibling age 31 - 35',
            'sibling_order_35_above' => 'Sibling age 35 Above',
            'father_name' => 'Father Name',
            'father_contact' => 'Father Contact',
            'mother_name' => 'Mother Name',
            'mother_contact' => 'Mother Contact',
            'caregiver_name' => 'Caregiver Name',
            'caregiver_contact' => 'Caregiver Contact',
            'other_name' => 'Other Name',
            'other_name_contact' => 'Other Name Contact',
            'fmember_income_no' => 'How many family members of working age (over 18) have access to income',
            'fmember_income_sources' => "How many family members of working age (over 18) have access to income (sources)",
            'income_regularity' => 'What is the regularity of income?',
            'household_indebt' => 'Household present indebtness to meet basic needs',
            'household_assets' => 'Household acess to natural resources',
            'household_tools' => 'Household tools and infrastructure',
            'hhold_educ_level' => 'Level of education',
            'sex_exploit' => 'Nature of sexual exploitation (briefly how was the child exploited)',
            'exploit_happen_when' => 'When did the exploitation happen',
            'exploit_continue' => 'Is it continuing',
            'exploit_month' => 'Exploit Month',
            'exploit_year' => 'Exploit Year',
            'exploit_reported' => 'Has the exploitation been reported',
            'exploit_reported_to' => 'If yes, to who was it reported to',
            'exploit_rpt_to_spec' => 'If Other , Specify',
            'exploit_notreported_reason' => 'If No, why didnt child report the case to anyone?',
            'other_detail' => 'Any other details noted during interview',
            'child_init' => 'Child Initials',
            'caregiver_interview_name' => 'Caregiver Interview Name',
            'caregiver_interview_contact' => 'Contact of caregiver',
            'caregiver_interview_date' => 'Date caregiver gave information',
            'kesho_staff_name' => 'Kesho Kenya child protection staff detail',
            'kesho_staff_contact' => 'Kesho Kenya staff contact',
            'kesho_staff_interview_date' => 'Date Kesho Kenya staff gave details',
            'kesho_designation' => 'Kesho Kenya staff designation',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkConsent()
    {
        return $this->hasOne(Consent::className(), ['id' => 'fk_consent']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChildSchools()
    {
        return $this->hasMany(ChildSchool::className(), ['fk_child' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChildSiblings()
    {
        return $this->hasMany(ChildSibling::className(), ['fk_child' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHomeVisits()
    {
        return $this->hasMany(HomeVisit::className(), ['fk_child' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNeedAssessments()
    {
        return $this->hasMany(NeedAssessment::className(), ['fk_child' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCsesSchoolVisits()
    {
        return $this->hasMany(CsesSchoolVisit::className(), ['fk_child' => 'id']);
    }

    public function beforeSave($insert){

        if($this->isNewRecord){
            #generate eligibility ID
            $elig = new Eligibility();
            $elig_id = $elig->insertEligibility($this->child_code);
            if($elig_id){
                #generate consent ID
                $consent = new Consent();
                $consent_id = $consent->insertConsent($this->child_init, $elig_id);
                if($consent_id ){
                    #insert data in child
                    $this->fk_consent = $consent_id;

                }
                else{
                    #raise consent not found error
                    $this->addError("child_code", "Consent was not found. Could not create child record!");
                }
            }
            else{
                #raise eligibility not found error
                $this->addError("child_code", "Eligibility was not found. Could not create child record!");
            }
            
        }

        if($this->hasErrors()){
            return false;
        }
        else{
            return true;
        }

    }

    public static function secondaryMenu($scenario, $child_id){
        
        $child = Self::findOne($child_id);
        if($child){
            $return = '';
            switch($scenario){
                case "Child":
                    $return = Url::to(['child/update','id'=>$child_id]);
                    break;
                case "Consent":
                    $return = Url::to(['consent/update','id'=>$child->fk_consent]);
                    break;
                case "Eligibility":
                    $consent = Consent::findOne($child->fk_consent);
                    if($consent){
                        $elig = Eligibility::findOne($consent->fk_eligibilty_id);
                        if($elig){
                            $return = Url::to(['eligibility/update','id'=>$elig->id]);
                        }
                    }
                    break;
                case "NeedAssessment":
                    
                    $return = Url::to(['need-assessment/index','fk_child'=>$child_id]);
                    break;
                case "ChildSibling":
                    $return = Url::to(['child-sibling/index','fk_child'=>$child_id]);
                    break;
                case "ChildSchool":
                    $return = Url::to(['child-school/index','fk_child'=>$child_id]);
                    break;
                case "HomeVisit":
                    $return = Url::to(['home-visit/index','fk_child'=>$child_id]);
                    break;
                case "SchoolVisit":
                    $return = Url::to(['school-visit/index','fk_child'=>$child_id]);
                    break;
                default:
                    $return = false;
                    break;
            }

            return $return;
        }
    }

    
}
