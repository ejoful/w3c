<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%opensource_category}}".
 *
 * @property string $id
 * @property string $name
 * @property integer $position
 *
 * @property Opensource[] $opensources
 */
class OpensourceCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%opensource_category}}';
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
            'id' => Yii::t('app', '主键'),
            'name' => Yii::t('app', '名字'),
            'position' => Yii::t('app', '排序'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOpensources()
    {
        return $this->hasMany(Opensource::className(), ['opensource_category_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return OpensourceCategoryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OpensourceCategoryQuery(get_called_class());
    }
}
