<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\DetalleOrden */

$this->title = $model->orden_detalle_id;
$this->params['breadcrumbs'][] = ['label' => 'Detalle Ordens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detalle-orden-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->orden_detalle_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->orden_detalle_id], [
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
            'orden_detalle_id',
            'orden_id',
            'prod_id',
            'prod_pre',
            'prod_unida',
            'estado',
            'created_at',
        ],
    ]) ?>

</div>
