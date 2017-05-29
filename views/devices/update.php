<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Devices */

$this->title = 'Update Devices: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Devices', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'mac' => $model->mac]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="devices-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
