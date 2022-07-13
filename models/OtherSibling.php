<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%other_sibling}}".
 *
 * @property int $id
 * @property int $fk_child
 * @property string $name_sibling
 * @property string $nickname
 * @property string $location
 * @property string $edu_empl
 * @property string $class
 * @property int $age
 */
class OtherSibling extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%other_sibling}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fk_child', 'age'], 'integer'],
            [['name_sibling', 'nickname', 'location', 'edu_empl'], 'string', 'max' => 200],
            [['class'], 'string', 'max' => 50],
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
            'name_sibling' => 'Name Sibling',
            'nickname' => 'Nickname',
            'location' => 'Location',
            'edu_empl' => 'Edu Empl',
            'class' => 'Class',
            'age' => 'Age',
        ];
    }

    /**
     * {@inheritdoc}
     * @return OtherSiblingQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OtherSiblingQuery(get_called_class());
    }
}
