<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%tutorial_doc}}".
 *
 * @property integer $id
 * @property integer $tutorial_id
 * @property integer $is_menu
 * @property string $slug
 * @property string $name
 * @property string $description
 * @property string $content
 * @property string $tag
 * @property integer $position
 * @property integer $create_time
 * @property integer $update_time
 */
class TutorialDoc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%tutorial_doc}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tutorial_id', 'is_menu', 'slug', 'name', 'description', 'position'], 'required'],
            [['tutorial_id', 'is_menu', 'position', 'create_time', 'update_time'], 'integer'],
            [['content'], 'string'],
            [['slug'], 'string', 'max' => 100],
            [['name', 'tag'], 'string', 'max' => 255],
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
            'tutorial_id' => Yii::t('backend', '所属教程'),
            'is_menu' => Yii::t('backend', '是否菜单'),
            'slug' => Yii::t('backend', '别名'),
            'name' => Yii::t('backend', '名字'),
            'description' => Yii::t('backend', '描述'),
            'content' => Yii::t('backend', '内容'),
            'tag' => Yii::t('backend', '文章标签'),
            'position' => Yii::t('backend', '排序'),
            'create_time' => Yii::t('backend', '创建时间'),
            'update_time' => Yii::t('backend', '修改时间'),
        ];
    }

    /**
     * @inheritdoc
     * @return TutorialDocQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TutorialDocQuery(get_called_class());
    }
}
