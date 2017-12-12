<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\DetalleOrden */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detalle-orden-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'orden_id')->textInput() ?>

    <?= $form->field($model, 'prod_id')->textInput() ?>

    <?= $form->field($model, 'prod_pre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prod_unida')->textInput() ?>

    <?= $form->field($model, 'estado')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
