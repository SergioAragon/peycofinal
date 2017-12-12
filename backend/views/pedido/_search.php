<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PedidoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pedido-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_pedido') ?>

    <?= $form->field($model, 'cliente_id') ?>

    <?= $form->field($model, 'nombre_expo') ?>

    <?= $form->field($model, 'nombre_empresa') ?>

    <?= $form->field($model, 'frente') ?>

    <?php // echo $form->field($model, 'fondo') ?>

    <?php // echo $form->field($model, 'Referencia_stand') ?>

    <?php // echo $form->field($model, 'cantidad_stand') ?>

    <?php // echo $form->field($model, 'direccion') ?>

    <?php // echo $form->field($model, 'fecha_pedido') ?>

    <?php // echo $form->field($model, 'telefono') ?>

    <?php // echo $form->field($model, 'municipio_id') ?>

    <?php // echo $form->field($model, 'estado_id') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
