<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Akun3 */

$this->title = 'Create Akun3';
$this->params['breadcrumbs'][] = ['label' => 'Akun3s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="akun3-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
