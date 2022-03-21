<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[OtherSibling]].
 *
 * @see OtherSibling
 */
class OtherSiblingQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return OtherSibling[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return OtherSibling|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
