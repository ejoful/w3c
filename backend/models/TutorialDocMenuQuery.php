<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[TutorialDocMenu]].
 *
 * @see TutorialDocMenu
 */
class TutorialDocMenuQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return TutorialDocMenu[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return TutorialDocMenu|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
