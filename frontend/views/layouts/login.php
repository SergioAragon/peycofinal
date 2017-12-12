<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\widgets\headertopWidget; 
use frontend\widgets\headermiddleWidget;
use frontend\widgets\headerbottomWidget;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<header id="header"><!--header-->
  <?= headertopWidget::widget();?>
  <?= headermiddleWidget::widget();?>   
  <?= headerbottomWidget::widget();?>
    </header><!--/header-->
     <section>
        <div class="container">
            <div class="row" id="content">
              <div  class= " col-sm-12 mb-50" id="content">
                  <?= $content ?>     
                  </div>
            </div>
        </div>
    </section>
    
    <footer id="footer"><!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="companyinfo">
                            <h2><span>e</span>-shopper</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="\peyco\frontend\web\images\home\iframe1.png" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="\peyco\frontend\web\images\home\iframe2.png" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="\peyco\frontend\web\images\home\iframe3.png" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="\peyco\frontend\web\images\home\iframe4.png" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="address">
                            <img src="\peyco\frontend\web\images\home\map.png" alt="" />
                            <p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Service</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Online Help</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Order Status</a></li>
                                <li><a href="#">Change Location</a></li>
                                <li><a href="#">FAQ’s</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Quock Shop</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">T-Shirt</a></li>
                                <li><a href="#">Mens</a></li>
                                <li><a href="#">Womens</a></li>
                                <li><a href="#">Gift Cards</a></li>
                                <li><a href="#">Shoes</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Policies</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privecy Policy</a></li>
                                <li><a href="#">Refund Policy</a></li>
                                <li><a href="#">Billing System</a></li>
                                <li><a href="#">Ticket System</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>About Shopper</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Company Information</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Store Location</a></li>
                                <li><a href="#">Affillate Program</a></li>
                                <li><a href="#">Copyright</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>About Shopper</h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="Your email address" />
                                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                                <p>Get the most recent updates from <br />our site and be updated your self...</p>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
                    <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
                </div>
            </div>
        </div>
        
    </footer><!--/Footer-->
    <div class="modal fade" tabindex="-1" role="dialog" id="shoppingcart">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Cart</h4>
      </div>
      <div class="modal-body">
      <div class="row">
      <div class="col-sm-6">
        <img src="" id="imgP" alt="" width="50%">
    </div>
    <div class="col-sm-6">
        <p>Nombre Producto:<span id="txtnombre"></span> </p>
         <p>Precio Producto:<span id="txtpre"></span> </p>
         <h1 class="text-danger"> ¿Quieres eliminar este producto?</h1>
    </div>
</div>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" onclick="deleteItem('0')" >Eliminar </button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      <!--  <button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal" tabindex="-1" role="dialog" id="compra">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Comprar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p> Para poder comprar debes estar registrado
      <a href="<?=Yii::$app->homeUrl?>">aqui</a>
      </div></p>
      <div class="modal-footer">
       <!--  <button type="button" class="btn btn-primary">Registrase</button> -->
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<?php $this->endBody() ?>
<script >

function Comprar(){
    $('#compra').modal();
}


var ant;
var idProdu;
var quantity;
i=0;
function itemDown(id){
    i++;
    idProdu= id;
    ant = $("#quantity_"+id).val();
    quantity =  parseInt($("#quantity_"+id).val())-1;
if (quantity==0) {
     $('#shoppingcart').modal();
       img = $("#img_"+id).attr("src");
        $("#imgP").attr({
            'src':img,

});
  txtNom= $("#txtNom_"+id).text();
        $("#txtnombre").text(txtNom);
   $("#txtpre").text($("#txtPre_"+ id).text());
   }else{
    $("#quantity_"+id).val(ant);
     updateCart(id, quantity);
   }      

}

 function itemUp(id){
    idProdu = id;
quantity = parseInt($("#quantity_"+id).val())+1;
$("#quantity_"+id).val(quantity);
updateCart(id, quantity);
}

function updateCart(id,quantity ){
     $.get('<?=Yii::$app->homeUrl ?>shoppingcart/updatecart/'+ id+"/"+quantity, function(data){
        alert(data);
    $("#content").html(data);
     });
 }
 function deleteItem(id){
 if (id==0) {
    pro = idProdu;
 }else{
    pro = id;
 }
 updateCart(pro, 0);
 $('#shoppingcart').modal('hide');
 }

</script>
</body>
</html>
<?php $this->endPage() ?>
