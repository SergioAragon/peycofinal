<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DetalleProductoColor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detalle-producto-color-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'producto_id')->textInput() ?>

    <?= $form->field($model, 'color_id')->textInput() ?>

    <?= $form->field($model, 'cantidad')->textInput() ?>

    <?= $form->field($model, 'estado_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
