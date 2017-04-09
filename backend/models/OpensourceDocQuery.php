<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[OpensourceDoc]].
 *
 * @see OpensourceDoc
 */
class OpensourceDocQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return OpensourceDoc[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return OpensourceDoc|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
