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
 * @property string $location
 * @property string $class
 * @property string $age
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
            [['s_name', 'occupation','location','class','age'], 'string', 'max' => 200],
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
            'fk_child' => 'Child',
            's_order' => 'Sibling Order',
            's_name' => 'Sibling Names',
            'occupation' => 'Education / Occupation',
            'location' => "Location",
            'age' => "Age",
            'class' => "Class"
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
