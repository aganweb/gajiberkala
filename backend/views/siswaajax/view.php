<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Siswaajax */
?>
<div class="siswaajax-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'Nama',
            'NIS',
            'ID_Kelas',
            'tglmasuk',
            'gajiortu',
        ],
    ]) ?>

</div>
