<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Datas;

/**
 * DatasSearch represents the model behind the search form about `app\models\Datas`.
 */
class DatasSearch extends Datas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['add_time', 'send_content', 'recv_content', 'help_content'], 'safe'],
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
        $query = Datas::find();

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
            'add_time' => $this->add_time,
        ]);

        $query->andFilterWhere(['like', 'send_content', $this->send_content])
            ->andFilterWhere(['like', 'recv_content', $this->recv_content])
            ->andFilterWhere(['like', 'help_content', $this->help_content]);

        return $dataProvider;
    }
}
