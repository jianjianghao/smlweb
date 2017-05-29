<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "devices".
 *
 * @property integer $id
 * @property string $mac
 */
class Devices extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'devices';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mac'], 'required'],
            [['mac'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mac' => 'Mac',
        ];
    }
}
