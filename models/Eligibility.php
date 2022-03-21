<?php

namespace app\models;

use Yii;
use yii\helpers\Url;

/**
 * This is the model class for table "{{%eligibility}}".
 *
 * @property int $id Record ID
 * @property string $child_code Code of the child
 * @property string $eligibility_date Date
 * @property int $factor_family Family history
 * @property int $factor_env Enviromental factors
 * @property int $factor_peer_pressure Peer pressure
 * @property int $factor_economic Economic factors
 * @property string $factor_remark Remarks
 * @property int $age_range Age
 * @property int $child_attitude Attitude of the child
 * @property int $caregiver_attitude Attitude of the caregiver
 * @property int $disability_level Remarks from field officers /Social workers/councellor
 * @property string $age_remarks Remarks
 * @property string $child_attitude_rmk Remarks
 * @property string $caregiver_attitude_rmk Remarks
 * @property string $disability_level_rmk Remarks
 * @property string $kesho_kenya_rmk Kesho Kenya remarks
 * @property string $kesho_staff_name Kesho Kenya staff
 * @property string $vetting_comm_rmk Vetting commitee remarks
 * @property string $chairperson_name Chairperson name
 *
 * @property Consent[] $consents
 */
class Eligibility extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%eligibility}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['eligibility_date'], 'safe'],
            [['factor_family', 'factor_env', 'factor_peer_pressure', 'factor_economic', 'age_range', 'child_attitude', 'caregiver_attitude', 'disability_level'], 'integer'],
            [['factor_remark', 'age_remarks', 'child_attitude_rmk', 'caregiver_attitude_rmk', 'disability_level_rmk', 'kesho_kenya_rmk', 'vetting_comm_rmk'], 'string'],
            [['child_code'], 'string', 'max' => 50],
            [['kesho_staff_name', 'chairperson_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Record ID',
            'child_code' => 'Code of the child',
            'eligibility_date' => 'Date',
            'factor_family' => 'Family history',
            'factor_env' => 'Enviromental factors',
            'factor_peer_pressure' => 'Peer pressure',
            'factor_economic' => 'Economic factors',
            'factor_remark' => 'Remarks',
            'age_range' => 'Age',
            'child_attitude' => 'Attitude of the child',
            'caregiver_attitude' => 'Attitude of the caregiver',
            'disability_level' => 'Remarks from field officers /Social workers/councellor',
            'age_remarks' => 'Remarks',
            'child_attitude_rmk' => 'Remarks',
            'caregiver_attitude_rmk' => 'Remarks',
            'disability_level_rmk' => 'Remarks',
            'kesho_kenya_rmk' => 'Kesho Kenya remarks',
            'kesho_staff_name' => 'Kesho Kenya staff',
            'vetting_comm_rmk' => 'Vetting commitee remarks',
            'chairperson_name' => 'Chairperson name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getConsents()
    {
        return $this->hasMany(Consent::className(), ['fk_eligibilty_id' => 'id']);
    }

    public function insertEligibility($child_code){
        #check if we already have an eligibility - to avoid duplicates
        $check = $this->find()->where(['child_code'=>$child_code])->one();
        if($check){
            #do not create a new recored
            return $check->id;
        }
        else{
            #record did not exist, insert now.
            $this->child_code = $child_code;
            $this->save(False);
            $id = $this->getPrimaryKey();

            return $id;
        }

        return FALSE;
        
    }

    public static function getChildCode($fk_consent){
        $consent = Consent::findOne($fk_consent);
        if($consent){
            #find the elgibility model for this child
            $elig = Eligibility::findOne($consent->fk_eligibilty_id);
            if($elig){
                return $elig->child_code;
            }
        }

    }
    public static function getEligibilityDate($fk_consent){
        $consent = Consent::findOne($fk_consent);
        if($consent){
            #find the elgibility model for this child
            $elig = Eligibility::findOne($consent->fk_eligibilty_id);
            if($elig){
                return $elig->eligibility_date;
            }
        }
    }
}
