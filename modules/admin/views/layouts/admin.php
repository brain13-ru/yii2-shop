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
                            <p>Добро пожаловать на kids-shop.ru</p>
                            <p>Телефон: <a href="tel:0123456789">0123 456 789</a></p>
                        </div><!-- Header Top Left End -->
                    </div>

                    <div class="col mt-10 mb-10">
                      
                    </div>

                    <div class="col mt-10 mb-10">
                        <!-- Header Shop Links Start -->
                        <div class="header-top-right">

                            <p>
								<?php if(Yii::$app->user->isGuest): ?>
								<a href="/site/login">Вход</a>
								<?php else: ?>
								<a href="/site/logout" data-method="post"><?php echo Yii::$app->user->identity['username'];?> (выход)</a>
								<?php endif; ?>
                            </p>

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

                           

                        </div><!-- Header Advance Search End -->
                    </div>

                    <div class="col order-3 order-lg-2">
                        <div class="main-menu">
                            <nav>
                                
								<ul>
								    <li><a href="/">Главная страница</a>
									<li><a href="/admin">Админ. панель | Заказы</a>
			                        
			                        <li><a href="/admin/category">Категории</a></li>
									<li><a href="/admin/product">Товары</a></li>
			                        <li><a href="/admin/article">Статьи и новости</a></li>
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
	<div class="container">
	    <?php if( Yii::$app->session->hasFlash('success') ): ?>
		<div class="alert alert-success alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<?php echo Yii::$app->session->getFlash('success'); ?>
		</div>
		<?php endif;?>
		<?php echo $content; ?>
    </div>

    <!-- Footer Top Section Start -->
    <div class="footer-top-section section bg-theme-two-light pt-80 pt-lg-60 pt-md-60 pt-sm-60 pt-xs-40 pb-40 pb-lg-20 pb-md-20 pb-sm-20 pb-xs-0">
        <div class="container">
            <div class="row">


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

<?php $this->endBody() ?>

</body>

</html>
<?php $this->endPage() ?>