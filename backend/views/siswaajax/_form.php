<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\number\NumberControl;

/* @var $this yii\web\View */
/* @var $model common\models\Siswaajax */
/* @var $form yii\widgets\ActiveForm */
$dispOptions = ['class' => 'form-control kv-monospace'];
 
$saveOptions = [
    'type' => 'text', 
    'label'=>'<label>Saved Value: </label>', 
    'class' => 'kv-saved',
    'readonly' => true, 
    'tabindex' => 1000
];
 
$saveCont = ['class' => 'kv-saved-cont'];
?>

<div class="siswaajax-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID')->textInput() ?>

    <?= $form->field($model, 'Nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NIS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_Kelas')->textInput(['maxlength' => true]) ?>

   <?= $form->field($model, 'tglmasuk')->widget(
        DatePicker::className(), [
            
    'options' => ['placeholder' => 'Pilih Tanggal Masuk ...'],
    'pluginOptions' => [
        'format' => 'yyyy-mm-dd',
        'todayHighlight' => true
    ]
    ]);?>
    <?= $form->field($model, 'gajiortu')->widget(
        NumberControl::className(), [
   'maskedInputOptions' => [
        'prefix' => 'Rp. ',
        'suffix' => ' ',
        'groupSeparator' => '.',
        'radixPoint' => ',',
        'allowMinus' => false
    ],
     'options' => $saveOptions,
    'displayOptions' => $dispOptions,
    'saveInputContainer' => $saveCont
    ]);?>
  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
