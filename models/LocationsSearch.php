<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Locations;

/**
 * LocationsSearch represents the model behind the search form about `app\models\Locations`.
 */
class LocationsSearch extends Locations
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'device_id'], 'integer'],
            [['add_time', 'gps_L', 'gps_L_degree', 'gps_L_min', 'gps_L_sec', 'gps_L_type', 'gps_B_degree', 'gps_B_min', 'gps_B_sec', 'gps_B_type'], 'safe'],
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
        $query = Locations::find();

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
            'device_id' => $this->device_id,
            'add_time' => $this->add_time,
        ]);

        $query->andFilterWhere(['like', 'gps_L', $this->gps_L])
            ->andFilterWhere(['like', 'gps_L_degree', $this->gps_L_degree])
            ->andFilterWhere(['like', 'gps_L_min', $this->gps_L_min])
            ->andFilterWhere(['like', 'gps_L_sec', $this->gps_L_sec])
            ->andFilterWhere(['like', 'gps_L_type', $this->gps_L_type])
            ->andFilterWhere(['like', 'gps_B_degree', $this->gps_B_degree])
            ->andFilterWhere(['like', 'gps_B_min', $this->gps_B_min])
            ->andFilterWhere(['like', 'gps_B_sec', $this->gps_B_sec])
            ->andFilterWhere(['like', 'gps_B_type', $this->gps_B_type]);

        return $dataProvider;
    }
}
