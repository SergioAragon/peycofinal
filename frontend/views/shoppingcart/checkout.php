<?php 
use Yii\helpers\Html;
use yii\widgets\ActiveForm;


 ?>
<div class="cart_info">
	<table class="table table-condensed">
		<thead>
			<tr class="cart_menu">
				<td class="image">Item</td>
				<td class="description"></td>
				<td class="price">precio</td>
				<td class="quantity">Cantida</td>
				<td class="total">Total</td>
				<td></td>
			</tr>
		</thead>
		<tbody>
			<?php 
			$subtotal=0;
               foreach ($cart as $key => $value) {
                 ?>
			<tr>
				<td class="cart_product">
					<a href="">
						<img  id="img_<?= $key;  ?>"  src="<?= '/peyco/backend/web/img/'.$value["imag_adju"]?>" alt="<?=$value["nombre"] ?>" width="100" ></a>
				</td>
				<td class="cart_description">
					<h4><a id="txtPre_<?= $key;  ?>" href="<?= Yii::$app->homeUrl.'product/detalle/'.$key ?>"><?=$value["nombre"] ?></a></h4>
					<p>Web ID: <?= $key;  ?></p>
					<p>color: <?=$value["color_id"]?></p>
				</td>
				<td class="cart_price">
					<p id="txtNom_<?= $key;  ?>">$<?php echo number_format($value["costo"],0,"","." )?></p>
				</td>
				<td class="cart_quantity">
					<?=$value["pro_sl"] ?>
				</td>
				<td class="cart_total">
					<p class="cart_total_price">$<?= number_format($value["pro_sl"] * $value["costo"],0,"","." ); $subtotal +=$value["pro_sl"]* $value["costo"];  ?></p>
				</td>
				
			</tr>
          <?php } ?>
	    </tbody>
	</table>
	<section  class="rows">
		<div class="col-sm-9"></div>
	<div class="col-sm-3" >
					<div class="total_area" >
						<ul>
						    <li>iva<span>$2</span></li>
							<li>Envio<span>Gratis</span></li>
							<li>Total <span>$<?php echo number_format($subtotal,0,"","." );?></span></li>
						<!-- 	<a class="btn btn-default check_out" id="compras_<?= $key;?>" href="#" onclick="Comprar(<?=$key?>)">Comprar</a> -->
						</ul>
								<!-- <a class="btn btn-default update" href="">Update</a> -->
					</div>
                     </div>     
                     </section>     
</div>
 <?php $form = ActiveForm::begin(); ?>
<div class="row">
	<div class="col-sm-5"><h2>Informacion </h2>
		<div class="login-form">
		<?= $form->field($model, 'nombre')->textInput(['autofocus'=>true,'placeholder'=>"nombre"]) ?>
		<?= $form->field($model, 'email')->textInput(['placeholder'=>"email"]) ?>
		<?= $form->field($model, 'celular')->textInput(['placeholder'=>"calular"]) ?>
		<?= $form->field($model, 'address')->textInput(['placeholder'=>"direccion"]) ?>
    </div>
	</div>
	<div class="col-sm-2">
		<input type="checkbox" name="ckeck" id="check" onchange="changeItem(this.id)"><label for="check"> Destino a la misma direccion</label>
           <?= $form->field($model, 'pago_id')->dropDownList($pagos,['prompt'=>'Forma de pago'])  ?>

	</div>
	<div class="col-sm-5"><h2>Informacion del recibo</h2>
<div class="login-form">
	   <?= $form->field($model, 'user_envio')->textInput(['autofocus'=> true,'placeholder'=>"Nombre"]) ?>
		<?= $form->field($model, 'email_envio')->textInput(['placeholder'=>"email"]) ?>
		<?= $form->field($model, 'celular_envio')->textInput(['placeholder'=>"telefono"]) ?>
		<?= $form->field($model, 'address_envio')->textInput(['placeholder'=>"direccion"]) ?>
	
</div>
</div>
</div>
<div class="row">
	<div class="col-sm-8">
		<?= $form->field($model, 'solicitud')->textarea(['placeholder'=>"solicitud"]) ?>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
	<?= Html::submitButton($model->isNewRecord ? 'Comprar' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-default check_out' : 'btn btn-default check_out'])  ?>

      </div>
  </div>
</div>
 <?php ActiveForm::end(); ?>
<script >
  function changeItem(){
  	if ($('#check').prop('checked')) {
      $('#orden-user_envio').val($('#orden-nombre').val());
      $('#orden-email_envio').val($('#orden-email').val());
      $('#orden-celular_envio').val($('#orden-celular').val());
       $('#orden-address_envio').val($('#orden-address').val());
  	}else{
$('#orden-user_envio').val("");
$('#orden-email_envio').val("");
$('#orden-celular_envio').val("");
$('#orden-address_envio').val("");
  	}
  	
  }

</script>

              