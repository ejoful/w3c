<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%tutorial_category}}".
 *
 * @property integer $id
 * @property string $name
 * @property integer $position
 */
class TutorialCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%tutorial_category}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'position'], 'required'],
            [['position'], 'integer'],
            [['name'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('backend', '主键'),
            'name' => Yii::t('backend', '名字'),
            'position' => Yii::t('backend', '排序'),
        ];
    }

    /**
     * @inheritdoc
     * @return TutorialCategoryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TutorialCategoryQuery(get_called_class());
    }
}
