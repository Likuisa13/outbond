<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JenisPaket */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jenis-paket-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_paket')->textInput() ?>

    <?= $form->field($model, 'Id_paket')->textInput() ?>

    <?= $form->field($model, 'jenis_paket')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Total_harga')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
