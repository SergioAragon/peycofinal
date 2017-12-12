<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\DetalleOrdenSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detalle-orden-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'orden_detalle_id') ?>

    <?= $form->field($model, 'orden_id') ?>

    <?= $form->field($model, 'prod_id') ?>

    <?= $form->field($model, 'prod_pre') ?>

    <?= $form->field($model, 'prod_unida') ?>

    <?php // echo $form->field($model, 'estado') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
