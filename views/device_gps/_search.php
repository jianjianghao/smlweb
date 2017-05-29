<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DeviceGpsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="device-gps-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'device_id') ?>

    <?= $form->field($model, 'add_time') ?>

    <?= $form->field($model, 'gps_L') ?>

    <?= $form->field($model, 'gps_L_degree') ?>

    <?php // echo $form->field($model, 'gps_L_min') ?>

    <?php // echo $form->field($model, 'gps_L_sec') ?>

    <?php // echo $form->field($model, 'gps_L_type') ?>

    <?php // echo $form->field($model, 'gps_B_degree') ?>

    <?php // echo $form->field($model, 'gps_B_min') ?>

    <?php // echo $form->field($model, 'gps_B_sec') ?>

    <?php // echo $form->field($model, 'gps_B_type') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
