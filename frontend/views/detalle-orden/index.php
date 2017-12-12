<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\DetalleOrdenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Detalle Ordens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detalle-orden-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Detalle Orden', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'orden_detalle_id',
            'orden_id',
            'prod_id',
            'prod_pre',
            'prod_unida',
            // 'estado',
            // 'created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
