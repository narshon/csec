<?php

namespace app\models;

use Yii;
use yii\helpers\Url;

/**
 * This is the model class for table "{{%consent}}".
 *
 * @property int $id Record ID
 * @property int $fk_eligibilty_id Eligibility ID
 * @property int $consent_edu Education/school service
 * @property int $consent_legal Legal and protective services
 * @property int $consent_disability Disability specific services
 * @property int $consent_psycho Psychosocial services
 * @property int $consent_comm Community services
 * @property int $consent_health Health/Medical services
 * @property int $consent_livelihood Livelihood services
 * @property int $consent_family Family members
 * @property string $caregiver_init Caregiver Initials
 * @property string $caregiver_contact Caregiver contact
 * @property string $child_init Child Initials
 * @property string $staff_init Staff Initials
 * @property string $consent_date Date of consent
 *
 * @property Child[] $children
 * @property Eligibility $fkEligibilty
 */
class Consent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%consent}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fk_eligibilty_id', 'consent_edu', 'consent_legal', 'consent_disability', 'consent_psycho', 'consent_comm', 'consent_health', 'consent_livelihood', 'consent_family'], 'integer'],
            [['consent_date'], 'safe'],
            [['caregiver_init', 'child_init', 'staff_init'], 'string', 'max' => 10],
            [['caregiver_contact'], 'string', 'max' => 20],
            [['fk_eligibilty_id'], 'exist', 'skipOnError' => true, 'targetClass' => Eligibility::className(), 'targetAttribute' => ['fk_eligibilty_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Record ID',
            'fk_eligibilty_id' => 'Eligibility ID',
            'consent_edu' => 'Education/school service',
            'consent_legal' => 'Legal and protective services',
            'consent_disability' => 'Disability specific services',
            'consent_psycho' => 'Psychosocial services',
            'consent_comm' => 'Community services',
            'consent_health' => 'Health/Medical services',
            'consent_livelihood' => 'Livelihood services',
            'consent_family' => 'Family members',
            'caregiver_init' => 'Caregiver Initials',
            'caregiver_contact' => 'Caregiver contact',
            'child_init' => 'Child Initials',
            'staff_init' => 'Staff Initials',
            'consent_date' => 'Date of consent',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChildren()
    {
        return $this->hasMany(Child::className(), ['fk_consent' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkEligibilty()
    {
        return $this->hasOne(Eligibility::className(), ['id' => 'fk_eligibilty_id']);
    }

    public function insertConsent($child_init, $elig_id){
        #check if we already have an eligibility - to avoid duplicates
        $check = $this->find()->where(['child_init'=>$child_init, 'fk_eligibilty_id'=>$elig_id])->one();
        if($check){
            #do not create a new recored
            return $check->id;
        }
        else{
            #record did not exist, insert now.
            $this->fk_eligibilty_id = $elig_id;
            $this->child_init = $child_init;
            $this->save(False);
            $id = $this->getPrimaryKey();

            return $id;
        }

        return FALSE;
        
    }
    public static function getChildInitials($fk_consent){
        $consent = Self::findOne($fk_consent);
        if($consent){
            return $consent->child_init;
        }
    }

    
}
