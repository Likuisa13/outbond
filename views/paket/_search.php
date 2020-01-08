<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PaketOutbondSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="paket-outbond-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id_paket') ?>

    <?= $form->field($model, 'Kd_paket') ?>

    <?= $form->field($model, 'Jenis_paket') ?>

    <?= $form->field($model, 'Harga') ?>

    <?= $form->field($model, 'Fasilitas') ?>

    <?php // echo $form->field($model, 'Kegiatan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
