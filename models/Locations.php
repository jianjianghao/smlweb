<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "locations".
 *
 * @property integer $id
 * @property integer $device_id
 * @property string $add_time
 * @property string $gps_L
 * @property string $gps_L_degree
 * @property string $gps_L_min
 * @property string $gps_L_sec
 * @property string $gps_L_type
 * @property string $gps_B_degree
 * @property string $gps_B_min
 * @property string $gps_B_sec
 * @property string $gps_B_type
 */
class Locations extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'locations';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['device_id'], 'integer'],
            [['add_time'], 'safe'],
            [['gps_L', 'gps_L_degree', 'gps_L_min', 'gps_L_sec', 'gps_L_type', 'gps_B_degree', 'gps_B_min', 'gps_B_sec', 'gps_B_type'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'device_id' => 'Device ID',
            'add_time' => 'Add Time',
            'gps_L' => 'Gps  L',
            'gps_L_degree' => 'Gps  L Degree',
            'gps_L_min' => 'Gps  L Min',
            'gps_L_sec' => 'Gps  L Sec',
            'gps_L_type' => 'Gps  L Type',
            'gps_B_degree' => 'Gps  B Degree',
            'gps_B_min' => 'Gps  B Min',
            'gps_B_sec' => 'Gps  B Sec',
            'gps_B_type' => 'Gps  B Type',
        ];
    }
}
