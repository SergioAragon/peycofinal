<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Reporte Color';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-reporte-color">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Aqui viene la tabla del reporte:
    </p>

    <!--?= GridView::widget([        
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_dpc',
            'producto_id',
            'color_id',
            'cantidad',
            'estado_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?-->


    <code><?= __FILE__ ?></code>

     

</div>
