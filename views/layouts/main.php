<?php
	
/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\hAppAsset;
use yii\bootstrap\Modal;

AppAsset::register($this);
hAppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html class="no-js" lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico">
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>
<div class="main-wrapper">

    <!-- Header Section Start -->
    <div class="header-section section">

        <!-- Header Top Start -->
        <div class="header-top header-top-one bg-theme-two">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-center">

                    <div class="col mt-10 mb-10 d-none d-md-flex">
                        <!-- Header Top Left Start -->
                        <div class="header-top-left">
                            <!--<p>Добро пожаловать на kids-shop.ru</p>
                            <p>Телефон: <a href="tel:0123456789">0123 456 789</a></p>-->
                        </div><!-- Header Top Left End -->
                    </div>

                    <div class="col mt-10 mb-10">
                      
                    </div>

                    <div class="col mt-10 mb-10">
                        <!-- Header Shop Links Start -->
                        <div class="header-top-right">

                            <!--<p><a href="#">Мой кабинет</a></p>-->
                           
							<?php if(Yii::$app->user->isGuest): ?>
							<p><a href="/site/login">Вход</a><p>
							<?php else: ?>
							<p><a href="/admin">Административная панель</a></p>
							<p><a href="/site/logout" data-method="post"><?php echo Yii::$app->user->identity['username'];?> (выход)</a></p>
							
							<?php endif; ?>
                            
                        </div><!-- Header Shop Links End -->
                    </div>

                </div>
            </div>
        </div><!-- Header Top End -->

        <!-- Header Bottom Start -->
        <div class="header-bottom header-bottom-one header-sticky@">
            <div class="container-fluid">
                <div class="row menu-center align-items-center justify-content-between">

                    <div class="col mt-15 mb-15">
                        <!-- Logo Start -->
                        <div class="header-logo">
                            <a href="/">
                               <img src="/images/logo.png" alt="kids-shop.ru">
                            </a>
                        </div><!-- Logo End -->
                    </div>

                    <div class="col order-2 order-lg-3">
                        <!-- Header Advance Search Start -->
                        <div class="header-shop-links">

                            <div class="header-search">
                                <button class="search-toggle"><img src="/images/icons/search.png" alt="Search Toggle"><img class="toggle-close" src="/images/icons/close.png" alt="Search Toggle"></button>
                                <div class="header-search-wrap">
                                    <form action="/catalog/search" method="get">
                                        <input name="q" type="text" placeholder="Наберите строку и нажмите ввод">
                                        <button type="submit"><img src="/images/icons/search.png" alt="Поиск"></button>
                                    </form>
                                </div>
                            </div>

                            <!--<div class="header-wishlist">
                                <a href="wishlist.html"><img src="/images/icons/wishlist.png" alt="Wishlist"> <span>02</span></a>
                            </div>-->

                            <div class="header-mini-cart">
                                <a href="#" id="mini-cart"><img src="/images/icons/cart.png" alt="Cart"> <span>
                                        <?php
                                        if(isset($_SESSION['cart.qty'])) {
                                            echo $_SESSION['cart.qty'] . " (" . $_SESSION['cart.sum'] . " руб.)";
                                        }
                                         else echo "Корзина пуста";
                                        ?>
                                    </span></a>
                            </div>

                        </div><!-- Header Advance Search End -->
                    </div>

                    <div class="col order-3 order-lg-2">
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li class="active"><a href="/">Главная</a>
                                       
                                    </li>
                                    <li><a href="/catalog">Продукция</a>
                                       
                                    </li>
                                    <li><a href="/article">Статьи и новости</a>
                                        
                                    </li>
                                   
                                    <li><a href="/site/contact">Контакты</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <!-- Mobile Menu -->
                    <div class="mobile-menu order-12 d-block d-lg-none col"></div>

                </div>
            </div>
        </div><!-- Header BOttom End -->

    </div><!-- Header Section End -->  

   <?php echo $content; ?>

    <!-- Footer Top Section Start -->
    <div class="footer-top-section section bg-theme-two-light pt-80 pt-lg-60 pt-md-60 pt-sm-60 pt-xs-40 pb-40 pb-lg-20 pb-md-20 pb-sm-20 pb-xs-0">
        <div class="container">
            <div class="row">

                <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                    <h4 class="title">НАШИ КОНТАКТЫ</h4>
                    <p>Адрес:<br/> Московская обл., Мытищи г., Тенистый бульвар, 21</p>
                    <!--<p><a href="tel:01234567890">01234 567 890</a><a href="tel:01234567891">01234 567 891</a></p>-->
                    <p><a href="info@kids-shop.fun">info@kids-shop.fun</a><a href="/">www.kids-shop.fun</a></p>
                </div>

                <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                    <h4 class="title">ПРОДУКЦИЯ</h4>
                    <ul>
                        <li><a href="/catalog/6">Паззлы</a></li>
                        <li><a href="/catalog/2">Наборы фигурок</a></li>
                        
                        <li><a href="/catalog/5">Конструкторы</a></li>
                       
                    </ul>
                </div>

                <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                    <h4 class="title">ИНФОРМАЦИЯ</h4>
                    <ul>
					    <li><a href="/site/contact">Контакты</a></li>
                        <!--<li><a href="#">О нас</a></li>
                        <li><a href="#">Оплата</a></li>
                        <li><a href="#">Доставка</a></li>-->
                        
                    </ul>
                </div>

                <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                    
                  

                </div>

            </div>
        </div>
    </div><!-- Footer Top Section End -->

    <!-- Footer Bottom Section Start -->
    <div class="footer-bottom-section section bg-theme-two pt-15 pb-15">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <p class="footer-copyright">Copyright &copy; All rights reserved</p>
                </div>
            </div>
        </div>
    </div><!-- Footer Bottom Section End -->

</div>
<?php
    Modal::begin([
            'id'=>'cart',
            'size'=>'modal-lg',
            'header'=>'<h2>Корзина</h2>',
            'footer'=>'<button type=button class="btn btn-default" data-dismiss="modal">Продолжить покупки</button>
            <a href="/cart/view" class="btn btn-success">Оформить заказ</a>
            <button type=button id="btn-clear" class="btn btn-danger" data-dismiss="modal">Очистить корзину</button>'
    ]);
    Modal::end();
?>
<?php $this->endBody() ?>
<script>
    $(document).ready(function(){
        $('.catalog').dcAccordion();

        function showCart(cart){
            $('#cart .modal-body').html(cart);
            $('#cart').modal();
        };


        //Добавляем обработку кнопки "В КОРЗИНУ"
        $('.add_to_cart').on('click',function(e){
            e.preventDefault();
            var id=$(this).data('id');
            var qty=$('#qty').val();

            $.ajax({
                url: '/cart/add',
                data: {id: id, qty: qty},
                type: 'GET',
                success: function (res) {
                    if (!res) alert('Ошибка!');

                    showCart(res);
                }
            });
        });

        $('#btn-clear').on('click',function(e){
            $.ajax({
                url: '/cart/clear',
                type: 'GET',
                success: function (res) {
                    if (!res) alert('Ошибка!');

                    showCart(res);
                }
            });
        });
        
        /*$('#btn-order').on('click',function () {

            $('#cart').close();
            window.location.replace('/cart/view');
        });*/

        $('#cart .modal-body').on('click','.del-item',function (e) {

            var id=$(this).data('id');
            $.ajax({
                url: '/cart/del-item',
                data: {id: id},
                type: 'GET',
                success: function (res) {
                    if (!res) alert('Ошибка!');

                    showCart(res);
                }
            })

        })

        $("#cart").on("hide.bs.modal", function () {
            location.reload();
        });

        $('#mini-cart').on('click',function(){
            $.ajax({
                url: '/cart/show',
                type: 'GET',
                success: function (res) {
                    if (!res) alert('Ошибка!');

                    showCart(res);
                }
            });
            return false;
        })
    });
</script>
</body>

</html>
<?php $this->endPage() ?>