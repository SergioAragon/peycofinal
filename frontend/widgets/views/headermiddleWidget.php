 <?php 

use yii\helpers\Html; 
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\web\IdentityInterface;
use yii\db\ActiveRecord;
use common\models\User;
// use yii\bootstrap\Modal;
  ?>


 <div class="header-middle"><!--header-middle-->
         <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="index"><img src="/peyco/backend/web/img/logo.jpg" width="180" alt="" /></a>
                            
                        </div>
                        
                    </div>
                    

                    <!-- <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-user"></i> Account</a></li>
                                <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
                                <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                                
                                <li><__=//Html::a('Cart', ['/site/cart'], ['class'=>"fa fa-shopping-cart"] ) //__> </li>
                                <li><=//Html::a('Login', ['/site/login'], ['class'=>"fa fa-lock"] ) //> </li>
                        </div>
                    </div> -->


                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                
                               <li><?php NavBar::begin([
                                //'brandLabel' => 'PEYCO',
                                'brandUrl' => Yii::$app->homeUrl,
                                'options' => [
                                    'class' => 'navbar-nav fixed-right',
                                ],
                            ]);
                                
                            // $menuItems = [
                            //     ['label' => 'Inicio', 'url' => ['/site/index']],                                
                            // ];     
                               if (Yii::$app->user->isGuest) {
                                 $menuItems[] = ['label' => 'Carro Compras', 'url' => ['shoppingcart/listcart']];
                                        $menuItems[] = ['label' => 'Registrarse', ['class'], 'url' => ['/site/signup']];
                                        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];

                                    } else {
                                    $menuItems[] = ['label' => 'Registro Compras', 'url' => ['shoppingcart/checkout']];
                                     $menuItems[] = ['label' => 'Carro Compras', 'url' => ['shoppingcart/listcart']];
                                        $menuItems[] = ['label' => 'Pedido', 'url' => ['/site/pedido']];
                                        $menuItems[] = ['label' => 'Perfil', 'url' => ['/site/view', 'id' => Yii::$app->user->identity->id]];
                                        $menuItems[] = '<li>'
                                            . Html::beginForm(['/site/logout'], 'post')
                                            . Html::submitButton(
                                                'Logout (' . Yii::$app->user->identity->nombres . ')',
                                                ['class' => 'btn btn-link logout']
                                            )
                                            . Html::endForm()
                                            . '</li>';
                                    }

                            echo Nav::widget([
                                'options' => ['class' => 'navbar-nav navbar-right'],
                                'items' => $menuItems,
                            ]);
                            NavBar::end();
                            ?>
                            </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div><!--/header-middle-->