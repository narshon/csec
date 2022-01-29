<?php

namespace app\models;

use Yii;

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
}
