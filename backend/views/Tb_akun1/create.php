<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Tb_akun1 */

$this->title = 'Create Tb Akun1';
$this->params['breadcrumbs'][] = ['label' => 'Tb Akun1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-akun1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
