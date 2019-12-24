<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\Tb_akun1Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Akun1s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-akun1-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tb Akun1', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_akun1',
            'akun1',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
