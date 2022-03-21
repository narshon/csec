<?php

namespace app\models;

use Yii;
use yii\helpers\Url;
/**
 * This is the model class for table "{{%child_school}}".
 *
 * @property int $id Record ID
 * @property int $fk_child
 * @property int $fk_school
 * @property string $class
 * @property string $stud_reg_no
 *
 * @property Child $fkChild
 * @property School $fkSchool
 */
class ChildSchool extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%child_school}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fk_child', 'fk_school'], 'integer'],
            [['class'], 'string', 'max' => 10],
            [['stud_reg_no'], 'string', 'max' => 100],
            [['fk_child'], 'exist', 'skipOnError' => true, 'targetClass' => Child::className(), 'targetAttribute' => ['fk_child' => 'id']],
            [['fk_school'], 'exist', 'skipOnError' => true, 'targetClass' => School::className(), 'targetAttribute' => ['fk_school' => 'id']],
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
            'fk_school' => 'Fk School',
            'class' => 'Class',
            'stud_reg_no' => 'Stud Reg No',
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
     * @return \yii\db\ActiveQuery
     */
    public function getFkSchool()
    {
        return $this->hasOne(School::className(), ['id' => 'fk_school']);
    }

}
