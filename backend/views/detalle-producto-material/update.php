<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DetalleProductoMaterial */

$this->title = 'Update Detalle Producto Material: ' . $model->id_dpm;
$this->params['breadcrumbs'][] = ['label' => 'Detalle Producto Materials', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_dpm, 'url' => ['view', 'id' => $model->id_dpm]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detalle-producto-material-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
