<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\User;
use backend\models\Pedido;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PedidoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reporte Pedidos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pedido-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <!--?= Html::a('Create Pedido', ['create'], ['class' => 'btn btn-success']) ?-->
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'rowOptions' =>function($model){

            if ($model->estado_id=='2') {
                return['class'=>'danger'];

            }elseif ($model->estado_id=='1') {
                return['class'=>'success'];
            }
        },
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pedido',
            // 'cliente_id',
            [
                // 'cliente_id',
                'class' => 'yii\grid\ActionColumn',               
                'template' => '{cliente_id}',
                'buttons' => [
                    'cliente_id' => function ($url, $model) {
                         // if ($model->cliente_id == $model->id){
                            // return Html::a('cliente_id', [$url=>'/clientes/view']);
                        return Html::a('cliente_id', ['cliente_id' => $model->id], [$url=>'clientes/view']);
                        // }
                    }
                ],
            ],
            'fecha_pedido',
            'estado_id',
            'municipio_id',
            'direccion',
            // 'medidas',
            
            ['class' => 'yii\grid\ActionColumn'],
            [
                'class' => 'yii\grid\ActionColumn',               
                'template' => '{desactiv}',
                'buttons' => [
                    'desactiv' => function ($url, $model) {
                        if ($model->estado_id == 1){
                            return Html::a('<span class="glyphicon glyphicon-thumbs-down"></span>', $url,
                                [
                                    'title' => Yii::t('app', 'Desactivar'),
                                    'data-confirm' => Yii::t('yii', 'Esta seguro que quiere Desactivar este pedido?'),
                                ]);
                        } else {
                            return Html::a('<span class="glyphicon glyphicon-thumbs-up"></span>', $url,
                                [
                                    'title' => Yii::t('app', 'Activar'),
                                    'data-confirm' => Yii::t('yii', 'Esta seguro que quiere Activar este pedido?'),
                                ]);
                        }
                    }
                ]
            ],
        ],
    ]); ?>
</div>
