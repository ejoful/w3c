<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%opensource_doc}}".
 *
 * @property string $id
 * @property string $opensource_id
 * @property integer $is_menu
 * @property string $slug
 * @property string $name
 * @property string $description
 * @property string $content
 * @property string $tag
 * @property integer $position
 * @property integer $create_time
 * @property integer $update_time
 * @property string $tutorial
 *
 * @property Opensource $opensource
 */
class OpensourceDoc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%opensource_doc}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['opensource_id', 'is_menu', 'position', 'create_time', 'update_time'], 'integer'],
            [['is_menu', 'slug', 'name', 'description', 'position'], 'required'],
            [['content'], 'string'],
            [['slug', 'tutorial'], 'string', 'max' => 100],
            [['name', 'tag'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 600],
            [['opensource_id'], 'exist', 'skipOnError' => true, 'targetClass' => Opensource::className(), 'targetAttribute' => ['opensource_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', '主键'),
            'opensource_id' => Yii::t('app', '所属教程'),
            'is_menu' => Yii::t('app', '是否菜单'),
            'slug' => Yii::t('app', '别名'),
            'name' => Yii::t('app', '名字'),
            'description' => Yii::t('app', '描述'),
            'content' => Yii::t('app', '内容'),
            'tag' => Yii::t('app', '文章标签'),
            'position' => Yii::t('app', '排序'),
            'create_time' => Yii::t('app', '创建时间'),
            'update_time' => Yii::t('app', '修改时间'),
            'tutorial' => Yii::t('app', 'Tutorial'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOpensource()
    {
        return $this->hasOne(Opensource::className(), ['id' => 'opensource_id']);
    }

    /**
     * @inheritdoc
     * @return OpensourceDocQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OpensourceDocQuery(get_called_class());
    }
}
