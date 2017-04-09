<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Tutorial;

/**
 * TutorialSearch represents the model behind the search form about `backend\models\Tutorial`.
 */
class TutorialSearch extends Tutorial
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'tutorial_category_id', 'position'], 'integer'],
            [['slug', 'name', 'description', 'img', 'img_path', 'content'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Tutorial::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'tutorial_category_id' => $this->tutorial_category_id,
            'position' => $this->position,
        ]);

        $query->andFilterWhere(['like', 'slug', $this->slug])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'img', $this->img])
            ->andFilterWhere(['like', 'img_path', $this->img_path])
            ->andFilterWhere(['like', 'content', $this->content]);

        return $dataProvider;
    }
}
