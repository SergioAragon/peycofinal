<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DetalleCotizacionProductosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Detalle Cotizacion Productos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detalle-cotizacion-productos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <!-- ?= //Html::a('Create Detalle Cotizacion Productos', ['create'], ['class' => 'btn btn-success']) ? -->
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_dcp',
            'producto_id',
            'cotizacion_id',
            'total_cotizacion',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view}',
                //'button' => []
            ],
        ],
    ]); ?>
</div>
