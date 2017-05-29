<?php

namespace app\controllers;

use app\models\Datas;
use app\models\Users;
use Yii;
use yii\web\Controller;

/**
 * 数据测试
 */
class DataController extends Controller
{
    /**
     * 发送数据
     * @return mixed
     */
    public function actionSend()
    {
        $data = "begin";
        return $this->render('send', [
            'data' => $data,
        ]);
    }

    /**
     * 接收数据
     * @return mixed
     */
    public function actionReceive()
    {
        // $data = Yii::$app->request->post('data');

        $data = 1;

        $model = Users::findOne(1);

        if ($model) {
            return $model->name;
        }else{
            return 'false';
        }






        
        // // $model->add_time     = '测试1';
        // // $model->send_content = '测试2';
        // // $model->recv_content = '测试3';
        // // $model->help_content = '测试4';

        // if ($model->load($data) && $model->save()) {
        //     echo "保存成功！";
        // } else {
        //     echo "保存失败！";
        // }

    }
}
