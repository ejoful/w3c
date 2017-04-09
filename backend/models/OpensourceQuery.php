<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Opensource]].
 *
 * @see Opensource
 */
class OpensourceQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Opensource[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Opensource|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
