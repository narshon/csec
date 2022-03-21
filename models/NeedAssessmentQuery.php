<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[NeedAssessment]].
 *
 * @see NeedAssessment
 */
class NeedAssessmentQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return NeedAssessment[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return NeedAssessment|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
