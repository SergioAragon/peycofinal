<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Pedido */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pedido-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cliente_id')->textInput() ?>

    <?= $form->field($model, 'nombre_expo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre_empresa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'frente')->textInput() ?>

    <?= $form->field($model, 'fondo')->textInput() ?>

    <?= $form->field($model, 'Referencia_stand')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cantidad_stand')->textInput() ?>

    <?= $form->field($model, 'direccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_pedido')->textInput() ?>

    <?= $form->field($model, 'telefono')->textInput() ?>

    <?= $form->field($model, 'municipio_id')->textInput() ?>

    <?= $form->field($model, 'estado_id')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
