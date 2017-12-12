<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DetalleProductoColor */

$this->title = 'Update Detalle Producto Color: ' . $model->id_dpc;
$this->params['breadcrumbs'][] = ['label' => 'Detalle Producto Colors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_dpc, 'url' => ['view', 'id' => $model->id_dpc]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detalle-producto-color-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
