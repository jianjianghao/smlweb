<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "datas".
 *
 * @property integer $id
 * @property string $add_time
 * @property string $send_content
 * @property string $recv_content
 * @property string $help_content
 */
class Datas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'datas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['add_time'], 'safe'],
            [['send_content', 'recv_content', 'help_content'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
<<<<<<< HEAD
            'id' => 'ID',
            'add_time' => 'Add Time',
=======
            'id'           => 'ID',
            'add_time'     => 'Add Time',
>>>>>>> origin/hjh-develop
            'send_content' => 'Send Content',
            'recv_content' => 'Recv Content',
            'help_content' => 'Help Content',
        ];
    }
}
