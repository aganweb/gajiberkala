<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\Siswa */

$this->title = 'Create Siswa';
$this->params['breadcrumbs'][] = ['label' => 'Siswas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="siswa-create">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID')->textInput() ?>

    <?= $form->field($model, 'Nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NIS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_Kelas')->textInput(['maxlength' => true]) ?>

    <?=
		$form->field($model, 'Tgl_Masuk')->widget(DatePicker::className(), [
            
            'options' => ['placeholder' => 'Pilih Tanggal Masuk ...'],
            'pluginOptions' => [
                'todayHighlight' => true
		    ]
		]);
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
