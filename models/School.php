<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%school}}".
 *
 * @property int $id Record ID
 * @property string $school_name Name of school
 * @property string $location School location
 *
 * @property ChildSchool[] $childSchools
 */
class School extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%school}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['school_name', 'location'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Record ID',
            'school_name' => 'Name of school',
            'location' => 'School location',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChildSchools()
    {
        return $this->hasMany(ChildSchool::className(), ['fk_school' => 'id']);
    }

    public static function getLookupValues(){
        return Self::find()->select(['school_name', 'id'])->indexBy('id')->column();
    }
}
