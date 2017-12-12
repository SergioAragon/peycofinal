<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DetalleProductoColorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Detalle Producto Colors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detalle-producto-color-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <!--?= Html::a('Create Detalle Producto Color', ['create'], ['class' => 'btn btn-success']) ?-->
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'rowOptions' => function($model){

            if ($model->cantidad==0) {
                $model->estado_id=2;
                $model->save();
                return['class'=>'danger'];

            // }elseif ($model->cantidad<='3') {
            }else{
                $model->estado_id=1;
                $model->save();
                return['class'=>'success'];
                
            }
        },
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_dpc',
            'producto_id',
            'color_id',
            'cantidad',
            'estado_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
