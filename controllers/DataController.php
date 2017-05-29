<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Datas;


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
        $data = Yii::$app->request->post('data');

        $model = new Datas();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }

    }
}
