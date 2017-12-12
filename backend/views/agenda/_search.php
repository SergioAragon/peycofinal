<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AgendaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="agenda-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_agenda') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'empleado_id') ?>

    <?= $form->field($model, 'fase_id') ?>

    <?= $form->field($model, 'pedido_id') ?>

    <?php // echo $form->field($model, 'fecha_inicio') ?>

    <?php // echo $form->field($model, 'fecha_fin') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
