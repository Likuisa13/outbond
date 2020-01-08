<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Wisatawan */

$this->title = 'Create Wisatawan';
$this->params['breadcrumbs'][] = ['label' => 'Wisatawans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wisatawan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
