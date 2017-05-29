<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DeviceGps */

$this->title = 'Create Device Gps';
$this->params['breadcrumbs'][] = ['label' => 'Device Gps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="device-gps-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
