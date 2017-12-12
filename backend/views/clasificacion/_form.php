<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Clasificacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clasificacion-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">

    <!--?= $form->field($model, 'id_clasifi')->textInput() ?-->

    <div class="col-sm-6"><?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?></div>

    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
