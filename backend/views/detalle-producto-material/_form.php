<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DetalleProductoMaterial */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detalle-producto-material-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'materiales_id')->textInput() ?>

    <?= $form->field($model, 'producto_id_producto')->textInput() ?>

    <?= $form->field($model, 'estado_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
