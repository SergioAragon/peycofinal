<?php

namespace frontend\controllers;
use Yii;
use common\libs\Cart;
use Yii\web\Session;

use frontend\models\Orden;
use frontend\models\OrdenSearch;
use frontend\models\Pagos;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use  yii\helpers\ArrayHelper;
use frontend\models\DetalleOrden;

use common\libs\sendEmail;

class ShoppingcartController extends \yii\web\Controller
{
    
    public function actionIndex()
    {
        return $this->render('index');
    }
    function actionAddcart($id,$num)
    {
    $cart= new Cart();
    $cart->addCart($id, $num);

    echo "<prE>";
    print_r(Yii::$app->session['cart']);
       die;
    }


function actionListcart(){
$this->layout='login';
$cart = Yii::$app->session['cart'];
return $this->render('cartitem',['cart'=>$cart]);

}


function actionUpdatecart($id,$num){
    $cart = new Cart();
    $cart->updateCart($id,$num);
     return  $this->renderPartial('cartitem',['cart'=>Yii::$app->session['cart']]);
}

function actionCheckout(){
    $this->layout='login';
    $cart = Yii::$app->session["cart"];
    $model = new Orden();
    // echo "<prE>";
    // print_r(Yii::$app->user->identity->username);
    // die;
    $time = time();
$model->user_id=0;
if (!Yii::$app->user->isGuest) {
    $model->nombre = Yii::$app->user->identity->username;
     $model->email = Yii::$app->user->identity->email;
     $model->celular = Yii::$app->user->identity->telefono;
     $model->user_id = Yii::$app->user->id;
  
}
    
    $pagos = new Pagos();
    $total=0;
foreach ($cart as $key => $value) {
    $total +=$value["pro_sl"]*$value["costo"];
}
   $model->total = $total;
    $model->estado = 1;
   $model->created_at = $time;

    $pagos = ArrayHelper::map($pagos->getAllPagos(),'pag_id', 'pag_nom');
 //     if (Yii::$app->request->post()) {
 // echo "<pre>";
 //    print_r(Yii::$app->request->post());
 //    die;
 //     }


    if ($model->load(Yii::$app->request->post()) && $model->save()) {
         //guardar la detalle 
        $infoPost = Yii::$app->request->post();
        $order_id = $model->order_id;

        $Body = '<table><tr class="cart_menu"><td clas="image">Item</td><td class="description"></td>
        <td class="price">price</td><td class="quantity">Quantity</td><td class="total">total</td>  
        <td></td></tr>';
        $i=1;


 foreach ($cart as $key => $value) {

    $Body .='<tr><td class="cart_product">'.$i++.'</td>';
    $Body .='<td class="cart_product">'.$value["nombre"].'</td>';
    $Body .='<td class="cart_product">'.$value["costo"].'</td>';
    $Body .='<td class="cart_product">'.$value["pro_sl"].'</td>';
    $Body .='<td class="cart_product"><img src="http://localhost:90/peyco01/'.$value["imag_adju"].'"/></td>';
    $Body .='<td class="cart_product">'.$value["costo"]*$value["pro_sl"].'</td></tr>';

        $ordenDetalle = new DetalleOrden();
        $ordenDetalle->orden_id=$order_id;
        $ordenDetalle->prod_id = $key;
        $ordenDetalle->prod_pre=$value["costo"];
        $ordenDetalle->prod_unida =$value["pro_sl"];
        $ordenDetalle->estado=1;
        $ordenDetalle->created_at = $time;

      if ($ordenDetalle->save()) {

      }

    }
       $emailSend = [
       $infoPost["Orden"]["email"], 
        $infoPost["Orden"]["email_envio"]
    ];
       $email = new sendEmail($emailSend, 'informacion del pedido', $Body);
       // $email->sendEmail();
     

    }

    return $this->render('checkout',['cart'=>$cart, 'model'=>$model,'pagos'=>$pagos]);
}

}
