<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Datas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="datas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'add_time')->textInput() ?>

    <?= $form->field($model, 'send_content')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'recv_content')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'help_content')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
