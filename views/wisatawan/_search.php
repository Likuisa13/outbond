<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\WisatawanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wisatawan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id_wisatawan') ?>

    <?= $form->field($model, 'Nama') ?>

    <?= $form->field($model, 'Nama_instansi') ?>

    <?= $form->field($model, 'Alamat') ?>

    <?= $form->field($model, 'Email') ?>

    <?php echo $form->field($model, 'No_telp') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
