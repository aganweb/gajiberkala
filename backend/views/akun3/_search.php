<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Akun3Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="akun3-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kd_akun1') ?>

    <?= $form->field($model, 'kd_akun2') ?>

    <?= $form->field($model, 'kd_akun3') ?>

    <?= $form->field($model, 'akun3') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
