<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%tutorial}}".
 *
 * @property string $id
 * @property string $tutorial_category_id
 * @property string $slug
 * @property string $name
 * @property string $description
 * @property string $img
 * @property string $img_path
 * @property string $content
 * @property integer $position
 *
 * @property TutorialCategory $tutorialCategory
 * @property TutorialDoc[] $tutorialDocs
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
            [['tutorial_category_id', 'position'], 'integer'],
            [['slug', 'name', 'description', 'img', 'img_path', 'content', 'position'], 'required'],
            [['content'], 'string'],
            [['slug', 'name', 'img', 'img_path'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 600],
            [['tutorial_category_id'], 'exist', 'skipOnError' => true, 'targetClass' => TutorialCategory::className(), 'targetAttribute' => ['tutorial_category_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', '主键'),
            'tutorial_category_id' => Yii::t('app', '教程分类'),
            'slug' => Yii::t('app', '别名'),
            'name' => Yii::t('app', '名字'),
            'description' => Yii::t('app', '描述'),
            'img' => Yii::t('app', '图片'),
            'img_path' => Yii::t('app', 'Img Path'),
            'content' => Yii::t('app', '内容'),
            'position' => Yii::t('app', '排序'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTutorialCategory()
    {
        return $this->hasOne(TutorialCategory::className(), ['id' => 'tutorial_category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTutorialDocs()
    {
        return $this->hasMany(TutorialDoc::className(), ['tutorial_id' => 'id']);
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
