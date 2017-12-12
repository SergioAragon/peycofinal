<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\DetalleProductoMaterial */

$this->title = $model->id_dpm;
$this->params['breadcrumbs'][] = ['label' => 'Detalle Producto Materials', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detalle-producto-material-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <!--?= Html::a('Update', ['update', 'id' => $model->id_dpm], ['class' => 'btn btn-primary']) ?-->
        <?= Html::a('Delete', ['delete', 'id' => $model->id_dpm], [
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
            'id_dpm',
            'materiales_id',
            'producto_id_producto',
            'estado_id',
        ],
    ]) ?>

</div>
