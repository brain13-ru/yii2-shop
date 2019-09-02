<?php
use yii\helpers\Html;
?>
<!-- Page Banner Section Start -->
<div class="page-banner-section section" style="background-image: url(/images/hero/hero-1.jpg)">
    <div class="container">
        <div class="row">
            <div class="page-banner-content col">

                <h1><?php echo $product['name'];?></h1>
                <ul class="page-breadcrumb">
                    <li><a href="/">Главная</a></li>
                    <li><a href="/catalog">Продукция</a></li>
                    <li><a href="/catalog/product/<?php echo $product['id'];?>"><?php echo $product['name'];?></a></li>
                </ul>

            </div>
        </div>
    </div>
</div><!-- Page Banner Section End -->

<?php 
	$mainImg=$product->getImage();
	$gallery=$product->getImages();
?>
<!-- Page Section Start -->
<div class="page-section section mt-80 mt-lg-60 mt-md-60 mt-sm-60 mt-xs-40 mb-80 mb-lg-60 mb-md-60 mb-sm-60 mb-xs-40">
    <div class="container">
        <div class="row row-30">

            <div class="col-12">
                <div class="row row-20 mb-20 mb-xs-0">

                    <div class="col-lg-6 col-12 mb-40">

                        <div class="pro-large-img mb-10 fix easyzoom easyzoom--overlay easyzoom--with-thumbnails">
                            <a href="<?php echo $mainImg->getUrl(); ?>">
                                
								<?php echo Html::img($mainImg->getUrl(),['alt'=>$product['name']]);?>
                            </a>
                        </div>
                        <!-- Single Product Thumbnail Slider -->
                        
						<ul id="pro-thumb-img" class="pro-thumb-img">
						<?php foreach($gallery as $img): ?>
							<li><a href="<?php echo $img->getUrl(); ?>"><?php echo Html::img($img->getUrl('98x'));?></a></li>
						<?php 
							endforeach; ?>
						</ul>
                    </div>

                    <div class="col-lg-6 col-12 mb-40">
                        <div class="single-product-content">

                            <div class="head">
                                <div class="head-left">

                                    <h3 class="title"><?php echo $product['name']; ?></h3>

                                    <!--<div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>-->

                                </div>

                                <div class="head-right">
                                    <span class="price"><?php echo $product['price']; ?> руб.</span>
                                </div>
                            </div>

                            <div class="description">
                                <p><?php echo $product['content']; ?> </p>
                            </div>

                            <!--<span class="availability">Доступность: <span>В наличии</span></span>-->

                            <div class="quantity-colors">

                                <div class="quantity">
                                    <h5>Количество:</h5>
                                    <div class="pro-qty"><input name="qty" id="qty" type="text" value="1"></div>
                                </div>

                                <!--<div class="colors">
                                    <h5>Цвет:</h5>
                                    <div class="color-options">
                                        <button style="background-color: #ff502e"></button>
                                        <button style="background-color: #fff600"></button>
                                        <button style="background-color: #1b2436"></button>
                                    </div>
                                </div>-->

                            </div>

                            <div class="actions">

                                <button class="add_to_cart" data-id="<?php echo $product->id;?>"><i class="ti-shopping-cart"></i><span>В КОРЗИНУ</span></button>
                                <!--<button class="box" data-tooltip="Compare"><i class="ti-control-shuffle"></i></button>
                                <button class="box" data-tooltip="Wishlist"><i class="ti-heart"></i></button>-->

                            </div>

                            <!--<div class="tags">

                                <h5>Tags:</h5>
                                <a href="#">Electronic</a>
                                <a href="#">Smartphone</a>
                                <a href="#">Phone</a>
                                <a href="#">Charger</a>
                                <a href="#">Powerbank</a>

                            </div>-->

                            <!--<div class="share">

                                <h5>Share: </h5>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>

                            </div>-->

                        </div>
                    </div>

                </div>

               <!-- <div class="row mb-60 mb-xs-40">
                 
                    <div class="col-12">
                        <ul class="pro-info-tab-list section nav">
                            <li><a class="active" href="#more-info" data-toggle="tab">More info</a></li>
                            <li><a href="#data-sheet" data-toggle="tab">Data sheet</a></li>
                            <li><a href="#reviews" data-toggle="tab">Reviews</a></li>
                        </ul>
                    </div>
              
                    <div class="tab-content col-12">
                        <div class="pro-info-tab tab-pane active" id="more-info">
                            <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p>
                        </div>
                        <div class="pro-info-tab tab-pane" id="data-sheet">
                            <table class="table-data-sheet">
                                <tbody>
                                <tr class="odd">
                                    <td>Compositions</td>
                                    <td>Cotton</td>
                                </tr>
                                <tr class="even">
                                    <td>Styles</td>
                                    <td>Casual</td>
                                </tr>
                                <tr class="odd">
                                    <td>Properties</td>
                                    <td>Short Sleeve</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="pro-info-tab tab-pane" id="reviews">
                            <a href="#">Be the first to write your review!</a>
                        </div>
                    </div>
                </div> -->
				
				

                <div class="row">

                    <div class="section-title text-left col col mb-60 mb-sm-40 mb-xs-30">
                        <h1>Похожие товары</h1>
                    </div>
				</div>
				<div class="row">
                    <!--<div class="related-product-slider related-product-slider-1 col-12 p-0">-->
                        <?php foreach($similar_products as $sim_product): ?>
                        <div class="col-lg-3">

                            <div class="product-item">
                                <div class="product-inner">

                                    <div class="image">
									    <?php $imgSim=$sim_product->getImage(); ?>
                                        <?php echo Html::img($imgSim->getUrl(),['alt'=>$sim_product['name']]);?>

                                        <div class="image-overlay">
                                            <div class="action-buttons">
                                                <button>в корзину</button>
                                                
                                            </div>
                                        </div>

                                    </div>

                                    <div class="content">

                                        <div class="content-left">

                                            <h4 class="title"><a href="/catalog/product/<?php echo $sim_product['id']; ?>"><?php echo $sim_product['name']; ?></a></h4>
                                        </div>
                                        <div class="content-right">
                                            <span class="price"><?php echo $sim_product['price']; ?> руб</span>
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>
                        <?php endforeach; ?>                    

                   <!-- </div>-->

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