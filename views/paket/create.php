<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PaketOutbond */

$this->title = 'Create Paket Outbond';
$this->params['breadcrumbs'][] = ['label' => 'Paket Outbonds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paket-outbond-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
