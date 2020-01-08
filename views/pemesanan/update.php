<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pemesanan */

$this->title = 'Update Pemesanan: ' . $model->Id_pemesanan;
$this->params['breadcrumbs'][] = ['label' => 'Pemesanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_pemesanan, 'url' => ['view', 'id' => $model->Id_pemesanan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pemesanan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
