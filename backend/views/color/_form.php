<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Color */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="color-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">

    <!--?= $form->field($model, 'id_color')->textInput() ?-->

    <div class="col-sm-3"><?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?></div>

    <div class="col-sm-3"><?= $form->field($model, 'num_color')->textInput(['maxlength' => true]) ?></div>
	</div>
    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
