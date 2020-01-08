<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Wisatawan */

$this->title = 'Update Wisatawan: ' . $model->Id_wisatawan;
$this->params['breadcrumbs'][] = ['label' => 'Wisatawans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_wisatawan, 'url' => ['view', 'id' => $model->Id_wisatawan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wisatawan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
