<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DeviceGps */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="device-gps-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'device_id')->textInput() ?>

    <?= $form->field($model, 'add_time')->textInput() ?>

    <?= $form->field($model, 'gps_L')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gps_L_degree')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gps_L_min')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gps_L_sec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gps_L_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gps_B_degree')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gps_B_min')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gps_B_sec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gps_B_type')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
