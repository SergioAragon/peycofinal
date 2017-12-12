<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DetalleProductoMaterialSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Detalle Producto Materials';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detalle-producto-material-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <!--?= Html::a('Create Detalle Producto Material', ['create'], ['class' => 'btn btn-success']) ?-->
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_dpm',
            'materiales_id',
            'producto_id_producto',
            'estado_id',

            ['class' => 'yii\grid\ActionColumn', 'template' => '{view}'],
        ],
    ]); ?>
</div>
