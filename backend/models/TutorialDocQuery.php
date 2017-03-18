<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[TutorialDoc]].
 *
 * @see TutorialDoc
 */
class TutorialDocQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return TutorialDoc[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return TutorialDoc|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
