<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\OrdenSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orden-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'order_id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'celular') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'user_envio') ?>

    <?php // echo $form->field($model, 'email_envio') ?>

    <?php // echo $form->field($model, 'celular_envio') ?>

    <?php // echo $form->field($model, 'address_envio') ?>

    <?php // echo $form->field($model, 'solicitud') ?>

    <?php // echo $form->field($model, 'total') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
