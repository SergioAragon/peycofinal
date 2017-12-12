<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\DetalleProductoColor */

$this->title = 'Create Detalle Producto Color';
$this->params['breadcrumbs'][] = ['label' => 'Detalle Producto Colors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detalle-producto-color-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
