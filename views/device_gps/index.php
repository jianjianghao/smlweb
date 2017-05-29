<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DeviceGpsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Device Gps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="device-gps-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Device Gps', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'device_id',
            'add_time',
            'gps_L',
            'gps_L_degree',
            // 'gps_L_min',
            // 'gps_L_sec',
            // 'gps_L_type',
            // 'gps_B_degree',
            // 'gps_B_min',
            // 'gps_B_sec',
            // 'gps_B_type',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
