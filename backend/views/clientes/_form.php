<?php

use yii\helpers\Html;
// use yii\widgets\ActiveForm;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Clientes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clientes-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">

    <div class="col-sm-6"><?= $form->field($model, 'nombres')->textInput(['maxlength' => true]) ?></div>

    <div class="col-sm-6"><?= $form->field($model, 'apellidos')->textInput(['maxlength' => true]) ?></div>

    

    <div class="col-sm-6"><?= $form->field($model, 'telefono')->textInput() ?></div>

    <div class="col-sm-6"><?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?></div>

    <div class="col-sm-6"><?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?></div>

    <div class="col-sm-6"><?= $form->field($model, 'password')->passwordInput() ?></div>

    <div class="col-sm-2"><?= $form->field($model, 'role')->DropDownList(['1' => 1, '2' => 2],
                                  [
                                            'default'=> '1'
                                  ]);  ?></div>
    
   <!--  //$form->field($model, 'auth_key')->textInput(['maxlength' => true]) 

    //$form->field($model, 'access_token')->textInput(['maxlength' => true]) 

    //$form->field($model, 'activate')->textInput() 

    //$form->field($model, 'status')->textInput() 

    //$form->field($model, 'created_at')->textInput() 

    //$form->field($model, 'updated_at')->textInput() 

    //$form->field($model, 'role')->textInput() 
 -->
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Registrar' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
