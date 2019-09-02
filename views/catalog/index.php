<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<!-- Page Banner Section Start -->
 <?php use app\components\MenuWidget; ?>
    <div class="page-banner-section section" style="background-image: url(/images/hero/hero-1.jpg)">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col">

                    <h1>Каталог продукции</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="/">Главная</a></li>
                        <li><a href="/catalog">Каталог продукции</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div><!-- Page Banner Section End -->

    <!-- Page Section Start -->
    <div class="page-section section mt-80 mt-lg-60 mt-md-60 mt-sm-60 mt-xs-40 mb-40 mb-lg-20 mb-md-20 mb-sm-20 mb-xs-0">
        <div class="container">
            <div class="row row-30">

                <div class="col-xl-9 col-lg-8 col-12 order-1 order-lg-2 mb-40">
                    <div class="row">


                        <?php foreach ($products as $product): ?>
                        <div class="col-xl-4 col-md-6 col-12 mb-40">

                            <div class="product-item">
                                <div class="product-inner">

                                    <div class="image">
									    <?php $mainImg=$product->getImage(); ?>
										<img src="<?php echo $mainImg->getUrl(); ?>" alt="<?php echo $product['name'];?>">
                                        <?php //echo Html::img('@web/images/product/'.$product['img'],['alt'=>$product['name']]);?>

                                        <div class="image-overlay">
                                            <div class="action-buttons">
                                                <button class="add_to_cart" data-id="<?php echo $product->id;?>">в корзину</button>
                                                
                                            </div>
                                        </div>

                                    </div>

                                    <div class="content">

                                        <div class="content-left">

                                            <h4 class="title"><a href="/catalog/product/<?php echo $product['id'];?>"><?php echo $product['name']; ?></a></h4>

                                           
                                        </div>

                                        <div class="content-right">
                                            <span class="price"><?php echo $product['price']; ?> руб.</span>
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>
                        <?php endforeach; ?>


                        <?php echo LinkPager::widget([
                        'pagination' => $pages,
                        ]); ?>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-12 order-2 order-lg-1 mb-40">

                    <div class="sidebar">
                        <h4 class="sidebar-title">Категории</h4>
                        <ul class="catalog sidebar-list">
                           <?php echo MenuWidget::widget(); ?>
                        </ul>
                      
                    </div>


                    <div class="sidebar">
                        <h4 class="sidebar-title">Популярные товары</h4>
                        <div class="sidebar-product-wrap">
						    <?php foreach($hits as $hit): ?>
                            <div class="sidebar-product">
							    <?php $hitImage=$hit->getImage(); ?>
                                <a href="/catalog/product/<?php echo $hit['id'];?>" class="image"><img src="<?php echo $hitImage->getUrl();?>" alt=""></a>
                                <div class="content">
                                    <a href="/catalog/product/<?php echo $hit['id'];?>" class="title"><?php echo $hit->name; ?></a>
                                    <span class="price"><?php echo $hit->price; ?> руб.</span>
                                    
                                </div>
                            </div>
							<?php endforeach; ?>
                            
                        </div>
                    </div>

                    

                </div>

            </div>
        </div>
    </div><!-- Page Section End -->

    <!-- Brand Section Start -->
    <div class="brand-section section mb-80 mb-lg-60 mb-md-60 mb-sm-60 mb-xs-40">
        <div class="container-fluid">
            <div class="row">
                <div class="brand-slider">

                    <div class="brand-item col">
                        <img src="/images/brands/brand-1.png" alt="">
                    </div>

                    <div class="brand-item col">
                        <img src="/images/brands/brand-2.png" alt="">
                    </div>

                    <div class="brand-item col">
                        <img src="/images/brands/brand-3.png" alt="">
                    </div>

                    <div class="brand-item col">
                        <img src="/images/brands/brand-4.png" alt="">
                    </div>

                    <div class="brand-item col">
                        <img src="/images/brands/brand-5.png" alt="">
                    </div>

                    <div class="brand-item col">
                        <img src="/images/brands/brand-6.png" alt="">
                    </div>

                </div>
            </div>
        </div>
    </div><!-- Brand Section End -->