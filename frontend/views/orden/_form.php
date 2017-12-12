<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Orden */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orden-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'celular')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_envio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email_envio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'celular_envio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address_envio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'solicitud')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'total')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
