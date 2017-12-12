<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DetalleCotizacionProductos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detalle-cotizacion-productos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'producto_id')->textInput() ?>

    <?= $form->field($model, 'cotizacion_id')->textInput() ?>

    <?= $form->field($model, 'total_cotizacion')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
