<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Pedido */

$this->title = $id = Yii::$app->user->identity->nombres .' '. Yii::$app->user->identity->apellidos;
$this->params['breadcrumbs'][] = ['label' => 'Pedido', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="pedido-view">

    <h2><?= 'Pedido: '.$id = Yii::$app->user->identity->nombres .' '. Yii::$app->user->identity->apellidos; ?></h2>
        
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id_pedido',
            // 'cliente_id',
            'nombre_expo',
            'nombre_empresa',
            'frente',
            // 'fondo',
            'Referencia_stand',
            'cantidad_stand',
            'direccion',
            // 'fecha_pedido',
            'telefono',
            // 'municipio_id',
            // 'estado_id',
            // 'updated_at',
        ],
    ]) ?>

</div>
