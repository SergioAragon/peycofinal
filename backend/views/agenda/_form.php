<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Empleado;
use backend\models\Fase;
use backend\models\Pedido;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Agenda */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="agenda-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'empleado_id')->DropDownList(
                                  ArrayHelper::map( empleado::find()->all(), 'id_empleado', 'nombre' ),
                                  [
                                            'prompt'=>'seleccione'

                                  ]
                                  ); ?>

    <?= $form->field($model, 'fase_id')->DropDownList(
                                  ArrayHelper::map( fase::find()->all(), 'id_fase', 'descripcion' ),
                                  [
                                            'prompt'=>'seleccione'

                                  ]
                                  );?>

    <?= $form->field($model, 'pedido_id')->DropDownList(
                                  ArrayHelper::map( pedido::find()->where('estado_id=1')->all(), 'id_pedido', 'nombre_expo' ),
                                  [
                                            'prompt'=>'seleccione'

                                  ]
                                  ); ?>

    <?= $form->field($model, 'fecha_inicio')->widget(
    DatePicker::classname(), [
    'pluginOptions' => [
        'format' => 'yyyy-m-dd',
        'todayHighlight' => true
    ]
]) ?>

    <?= $form->field($model, 'fecha_fin')->widget(
    DatePicker::classname(), [
    'pluginOptions' => [
        'format' => 'yyyy-m-dd',
        'todayHighlight' => true
    ]
]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
