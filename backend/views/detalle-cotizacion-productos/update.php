<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DetalleCotizacionProductos */

$this->title = 'Update Detalle Cotizacion Productos: ' . $model->id_dcp;
$this->params['breadcrumbs'][] = ['label' => 'Detalle Cotizacion Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_dcp, 'url' => ['view', 'id' => $model->id_dcp]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detalle-cotizacion-productos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
