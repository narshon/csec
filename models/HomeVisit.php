<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%home_visit}}".
 *
 * @property int $id Record ID
 * @property int $fk_child
 * @property string $home_visit_date
 * @property int $visit_no
 * @property int $case_file_no
 * @property string $life_change
 * @property string $change_effect
 *
 * @property Child $fkChild
 */
class HomeVisit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%home_visit}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fk_child', 'visit_no', 'case_file_no'], 'integer'],
            [['home_visit_date'], 'safe'],
            [['life_change', 'change_effect'], 'string'],
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
            'home_visit_date' => 'Home Visit Date',
            'visit_no' => 'Visit No',
            'case_file_no' => 'Case File No',
            'life_change' => 'Life Change',
            'change_effect' => 'Change Effect',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkChild()
    {
        return $this->hasOne(Child::className(), ['id' => 'fk_child']);
    }
}
