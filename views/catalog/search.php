<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<!-- Page Banner Section Start -->
<div class="page-banner-section section" style="background-image: url(/images/hero/hero-1.jpg)">
    <div class="container">
        <div class="row">
            <div class="page-banner-content col">

                <h1><?php echo $title;?></h1>
                <ul class="page-breadcrumb">
                    <li><a href="/">Главная</a></li>
                    <li><a href="/catalog">Продукция</a></li>
                </ul>

            </div>
        </div>
    </div>
</div><!-- Page Banner Section End -->

<!-- Page Section Start -->
<div class="page-section section mt-80 mt-lg-60 mt-md-60 mt-sm-60 mt-xs-40 mb-80 mb-lg-60 mb-md-60 mb-sm-60 mb-xs-40">
    <div class="container">

        <div class="row">

            <div class="col-12">
                <div class="product-show">
                    <h4>Показывать по:</h4>
                    <select class="nice-select">
                        <option>8</option>
                        <option>12</option>
                        <option>16</option>
                        <option>20</option>
                    </select>
                </div>
                <div class="product-short">
                    <h4>Сортировать:</h4>
                    <select class="nice-select">
                        <option>По названию </option>
                        <option>По возрастанию цены</option>

                    </select>
                </div>
            </div>
            <?php foreach ($products as $product): ?>
            <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-40">

                <div class="product-item">
                    <div class="product-inner">

                        <div class="image">
                            <?php echo Html::img('@web/images/product/'.$product['img'],['alt'=>$product['name']]);?>

                            <div class="image-overlay">
                                <div class="action-buttons">
                                    <button>в корзину</button>
                                    <button>в избранное</button>
                                </div>
                            </div>

                        </div>

                        <div class="content">

                            <div class="content-left">

                                <h4 class="title"><a href="/catalog/product/<?php echo $product['id'];?>"><?php echo $product['name']; ?></a></h4>

                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>

                                <h5 class="size">Size: <span>S</span><span>M</span><span>L</span><span>XL</span></h5>
                                <h5 class="color">Color: <span style="background-color: #ffb2b0"></span><span style="background-color: #0271bc"></span><span style="background-color: #efc87c"></span><span style="background-color: #00c183"></span></h5>

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