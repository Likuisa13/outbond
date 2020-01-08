<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\JenisPaket */

$this->title = 'Update Jenis Paket: ' . $model->kd_paket;
$this->params['breadcrumbs'][] = ['label' => 'Jenis Pakets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_paket, 'url' => ['view', 'id' => $model->kd_paket]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jenis-paket-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
