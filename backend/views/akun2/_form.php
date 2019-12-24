<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Akun2 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="akun2-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_akun1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_akun2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'akun2')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
