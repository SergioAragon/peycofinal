

<div class="cart_info">
	<table class="table table-condensed">
		<thead>
			<tr class="cart_menu">
				<td class="image">Item</td>
				<td class="description">color</td>
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
				</td>
				<td class="cart_price">
					<p id="txtNom_<?= $key;  ?>">$<?php echo number_format($value["costo"],0,"","." )?></p>
				</td>
				<td class="cart_quantity">
					<div class="cart_quantity_button">
						<a class="cart_quantity_up" href="javascript:void(0)" onclick="itemDown(<?= $key ?>)"> - </a>
						<input class="cart_quantity_input" type="text" name="quantity_<?=$key?>" id="quantity_<?=$key?>" value="<?= $value["pro_sl"] ?>" autocomplete="off" size="2">
						<a class="cart_quantity_down" href="javascript:void(0)" onclick="itemUp(<?= $key ?>)"> + </a>
					</div>
				</td>
				<td class="cart_total">
					<p class="cart_total_price">$<?= number_format($value["pro_sl"] * $value["costo"],0,"","." ); $subtotal +=$value["pro_sl"]* $value["costo"];  ?></p>
				</td>
				<td class="cart_delete">
					<a class="cart_quantity_delete" href="javascript:void(0)"  onclick="deleteItem(<?=$key ?>)" ><i class="fa fa-times"></i></a>
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
							<a class="btn btn-default check_out" href="#" onclick="Comprar(<?=$key?>)">Comprar</a>
						</ul>
								<!-- <a class="btn btn-default update" href="">Update</a> -->
					</div>
                     </div>     
                     </section>     
</div>

              