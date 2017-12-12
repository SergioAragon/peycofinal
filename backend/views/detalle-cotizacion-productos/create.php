<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\DetalleCotizacionProductos */

$this->title = 'Create Detalle Cotizacion Productos';
$this->params['breadcrumbs'][] = ['label' => 'Detalle Cotizacion Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detalle-cotizacion-productos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
