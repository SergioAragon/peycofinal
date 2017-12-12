<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DetalleProductoMaterialSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detalle-producto-material-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_dpm') ?>

    <?= $form->field($model, 'materiales_id') ?>

    <?= $form->field($model, 'producto_id_producto') ?>

    <?= $form->field($model, 'estado_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
