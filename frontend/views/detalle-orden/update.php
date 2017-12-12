<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\DetalleOrden */

$this->title = 'Update Detalle Orden: ' . $model->orden_detalle_id;
$this->params['breadcrumbs'][] = ['label' => 'Detalle Ordens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->orden_detalle_id, 'url' => ['view', 'id' => $model->orden_detalle_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detalle-orden-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
