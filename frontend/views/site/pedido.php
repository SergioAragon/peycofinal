<?php

/* @var $this yii\web\View */
/* @var $model backend\models\Pedido */
/* @var $form yii\widgets\ActiveForm */
// use yii\helpers\Html;
// use yii\widgets\ActiveForm;

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Pedido';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="pedido-form">
    
    <h3><?= $id = Yii::$app->user->identity->nombres .' '. Yii::$app->user->identity->apellidos; ?></h3>
    <div class="row">
        <div class="col-lg-9">
            <?php $form = ActiveForm::begin(['id' => 'pedido-form']); ?>

                <!--?= $form->field($model, 'cliente_id')->textInput() ?-->

                <div class="col-lg-6"><?= $form->field($model, 'nombre_expo')->textInput(['maxlength' => true]) ?></div>

                <div class="col-lg-6"><?= $form->field($model, 'nombre_empresa')->textInput(['maxlength' => true]) ?></div>

                <div class="col-lg-6"><?= $form->field($model, 'frente')->textInput() ?></div>

                <div class="col-lg-6"><?= $form->field($model, 'fondo')->textInput() ?></div>

                <div class="col-lg-6"><?= $form->field($model, 'Referencia_stand')->textInput(['maxlength' => true]) ?></div>

                <div class="col-lg-6"><?= $form->field($model, 'cantidad_stand')->textInput() ?></div>

                <div class="col-lg-6"><?= $form->field($model, 'direccion')->textInput(['maxlength' => true]) ?></div>

                <div class="col-lg-6"><!--?= $form->field($model, 'fecha_pedido')->textInput() ?--></div>

                <div class="col-lg-6"><?= $form->field($model, 'telefono')->textInput() ?></div>

                <div class="col-lg-6"><?= $form->field($model, 'municipio_id')->textInput() ?></div>

                <div class="col-lg-6"><?= $form->field($model, 'estado_id')->textInput() ?></div>

                <!--?= $form->field($model, 'updated_at')->textInput() ?-->


                <div class="form-group">
                    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>
