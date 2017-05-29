<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DeviceGps */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Device Gps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="device-gps-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'device_id',
            'add_time',
            'gps_L',
            'gps_L_degree',
            'gps_L_min',
            'gps_L_sec',
            'gps_L_type',
            'gps_B_degree',
            'gps_B_min',
            'gps_B_sec',
            'gps_B_type',
        ],
    ]) ?>

</div>
