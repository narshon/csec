<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%child_sibling}}".
 *
 * @property int $id
 * @property int $fk_child
 * @property int $s_order
 * @property string $s_name
 * @property string $occupation
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
            [['s_name', 'occupation'], 'string', 'max' => 200],
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
            's_order' => 'S Order',
            's_name' => 'S Name',
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
}
