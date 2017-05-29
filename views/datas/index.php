<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DatasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Datas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Datas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'add_time',
            'send_content',
            'recv_content',
            'help_content',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
