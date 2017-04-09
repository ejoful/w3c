<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%tutorial_doc_menu}}".
 *
 * @property string $id
 * @property string $tutorial_id
 * @property string $slug
 * @property string $name
 * @property integer $position
 */
class TutorialDocMenu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%tutorial_doc_menu}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tutorial_id', 'slug', 'name', 'position'], 'required'],
            [['tutorial_id', 'position'], 'integer'],
            [['slug'], 'string', 'max' => 50],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', '主键'),
            'tutorial_id' => Yii::t('app', '所属教程'),
            'slug' => Yii::t('app', '别名'),
            'name' => Yii::t('app', '名字'),
            'position' => Yii::t('app', '排序'),
        ];
    }

    /**
     * @inheritdoc
     * @return TutorialDocMenuQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TutorialDocMenuQuery(get_called_class());
    }
}
