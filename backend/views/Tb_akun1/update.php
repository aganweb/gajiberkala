<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Tb_akun1 */

$this->title = 'Update Tb Akun1: ' . $model->kd_akun1;
$this->params['breadcrumbs'][] = ['label' => 'Tb Akun1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_akun1, 'url' => ['view', 'id' => $model->kd_akun1]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-akun1-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
