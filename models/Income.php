<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%income}}".
 *
 * @property int $id Record ID
 * @property int $fk_child
 * @property string $child_relation
 * @property string $job_type
 * @property string $occupation
 *
 * @property Child $fkChild
 */
class Income extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%income}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fk_child'], 'integer'],
            [['child_relation', 'job_type', 'occupation'], 'string', 'max' => 20],
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
            'child_relation' => 'Child Relation',
            'job_type' => 'Job Type',
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

    /**
     * {@inheritdoc}
     * @return IncomeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new IncomeQuery(get_called_class());
    }
}
