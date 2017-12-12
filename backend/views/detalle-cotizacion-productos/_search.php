<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DetalleCotizacionProductosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detalle-cotizacion-productos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_dcp') ?>

    <?= $form->field($model, 'producto_id') ?>

    <?= $form->field($model, 'cotizacion_id') ?>

    <?= $form->field($model, 'total_cotizacion') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
