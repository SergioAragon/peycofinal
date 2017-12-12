<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\DetalleProductoMaterial */

$this->title = 'Create Detalle Producto Material';
$this->params['breadcrumbs'][] = ['label' => 'Detalle Producto Materials', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detalle-producto-material-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
