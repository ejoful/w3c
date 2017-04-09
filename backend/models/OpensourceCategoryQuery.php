<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[OpensourceCategory]].
 *
 * @see OpensourceCategory
 */
class OpensourceCategoryQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return OpensourceCategory[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return OpensourceCategory|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
