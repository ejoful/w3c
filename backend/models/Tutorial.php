<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%tutorial}}".
 *
 * @property integer $id
 * @property integer $tutorial_category_id
 * @property string $slug
 * @property string $name
 * @property string $description
 * @property string $img
 * @property string $content
 * @property integer $position
 */
class Tutorial extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%tutorial}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tutorial_category_id', 'slug', 'name', 'description', 'img', 'content', 'position'], 'required'],
            [['tutorial_category_id', 'position'], 'integer'],
            [['content'], 'string'],
            [['slug', 'name', 'img'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 600],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('backend', '主键'),
            'tutorial_category_id' => Yii::t('backend', '教程分类'),
            'slug' => Yii::t('backend', '别名'),
            'name' => Yii::t('backend', '名字'),
            'description' => Yii::t('backend', '描述'),
            'img' => Yii::t('backend', '图片'),
            'content' => Yii::t('backend', '内容'),
            'position' => Yii::t('backend', '排序'),
        ];
    }

    /**
     * @inheritdoc
     * @return TutorialQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TutorialQuery(get_called_class());
    }
}
