<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PaketOutbond */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="paket-outbond-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Kd_paket')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Jenis_paket')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Harga')->textInput() ?>

    <?= $form->field($model, 'Fasilitas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Kegiatan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
