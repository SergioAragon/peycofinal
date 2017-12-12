<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\DetalleCotizacionProductos */

$this->title = $model->id_dcp;
$this->params['breadcrumbs'][] = ['label' => 'Detalle Cotizacion Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detalle-cotizacion-productos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <!--?= Html::a('Update', ['update', 'id' => $model->id_dcp], ['class' => 'btn btn-primary']) ?-->
        <!--?= Html::a('Delete', ['delete', 'id' => $model->id_dcp], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?-->
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_dcp',
            'producto_id',
            'cotizacion_id',
            'total_cotizacion',
        ],
    ]) ?>

</div>
