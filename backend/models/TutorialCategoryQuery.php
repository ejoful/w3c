<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[TutorialCategory]].
 *
 * @see TutorialCategory
 */
class TutorialCategoryQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return TutorialCategory[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return TutorialCategory|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
