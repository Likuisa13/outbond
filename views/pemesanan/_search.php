<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PemesananSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pemesanan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id_pemesanan') ?>

    <?= $form->field($model, 'Kode_pemesanan') ?>

    <?= $form->field($model, 'Kd_paket') ?>

    <?= $form->field($model, 'Tgl_pemesanan') ?>

    <?= $form->field($model, 'Jml_peserta') ?>

    <?php // echo $form->field($model, 'Total_harga') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
