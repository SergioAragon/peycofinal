<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\export\ExportMenu;
// use yii\bootstrap\Modal;
// use yii\grid\DataColumn;


/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Productos';
$this->params['breadcrumbs'][] = ['label' => 'Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="producto-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Registrar Producto', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
            <?php 
      $gridColumns = [
    ['class' => 'kartik\grid\SerialColumn'],
    'id_producto',
            'nombre',
            'codClasifi.descripcion',
            'imag_adju',
];
        echo ExportMenu::widget([
            'dataProvider'=>$dataProvider,
            'columns'=>$gridColumns,
            'fontAwesome' => true,

            ]);
     ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'rowOptions' => function($model){

            if ($model->estado_id=='2') {
                return['class'=>'danger'];

            }elseif ($model->estado_id=='1') {
                return['class'=>'success'];
            }

            // if ($model->unidades==0) {
            //     $model->estado_id=2;
            //     $model->save();
            //     return['class'=>'danger'];
            // }elseif ($model->unidades!=0) {
            //      $model->estado_id==1;
            //     $model->save();
            //     return['class'=>'success'];
            // }
        },

        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_producto',
            'nombre',
            [ 'attribute'=>'cod_clasifi',
               'value'=>'codClasifi.descripcion' ,
           ],
            // 'cod_clasifi',
            //'dimension_producto',
            'imag_adju',
            [
                'attribute' => 'imagen',
            'format' => 'html',       
            'value' => function ($dataProvider) {
              $url = \Yii::getAlias('@web/img/').$dataProvider->imag_adju;
            return Html::img($url, ['alt'=>'Image','width'=>'50','height'=>'40']); 
 
            }
                 ],
            //'unidades',
                 
            // 'costo',             
             [ 'attribute'=>'estado_id',
               'value'=>'estado.descripcion',
           ],
             //'color_id',
            // 'cantidad_color',
            // 'materiales_id',
             
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
