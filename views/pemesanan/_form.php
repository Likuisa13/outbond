<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pemesanan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pemesanan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_pemesanan')->textInput() ?>

    <?= $form->field($model, 'Kode_pemesanan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Kd_paket')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tgl_pemesanan')->textInput() ?>

    <?= $form->field($model, 'Jml_peserta')->textInput() ?>

    <?= $form->field($model, 'Total_harga')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
