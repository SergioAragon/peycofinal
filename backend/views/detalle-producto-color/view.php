<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\DetalleProductoColor */

$this->title = $model->id_dpc;
$this->params['breadcrumbs'][] = ['label' => 'Detalle Producto Colors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detalle-producto-color-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <!--?= Html::a('Update', ['update', 'id' => $model->id_dpc], ['class' => 'btn btn-primary']) ?-->
        <?= Html::a('Delete', ['delete', 'id' => $model->id_dpc], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_dpc',
            'producto_id',
            'color_id',
            'cantidad',
            'estado_id',
        ],
    ]) ?>

</div>
