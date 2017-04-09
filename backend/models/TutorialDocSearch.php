<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TutorialDoc;

/**
 * TutorialDocSearch represents the model behind the search form about `backend\models\TutorialDoc`.
 */
class TutorialDocSearch extends TutorialDoc
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'tutorial_id', 'is_menu', 'position', 'create_time', 'update_time'], 'integer'],
            [['slug', 'name', 'description', 'content', 'tag', 'tutorial'], 'safe'],
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
        $query = TutorialDoc::find();

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
            'tutorial_id' => $this->tutorial_id,
            'is_menu' => $this->is_menu,
            'position' => $this->position,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
        ]);

        $query->andFilterWhere(['like', 'slug', $this->slug])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'tag', $this->tag])
            ->andFilterWhere(['like', 'tutorial', $this->tutorial]);

        return $dataProvider;
    }
}
