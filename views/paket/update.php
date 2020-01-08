<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PaketOutbond */

$this->title = 'Update Paket Outbond: ' . $model->Id_paket;
$this->params['breadcrumbs'][] = ['label' => 'Paket Outbonds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_paket, 'url' => ['view', 'id' => $model->Id_paket]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="paket-outbond-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
