<?php
use yii\helpers\Html;
?>
 <?php use app\components\MenuWidget; ?>
 <!-- Page Banner Section Start -->
    <div class="page-banner-section section" style="background-image: url(/images/hero/hero-1.jpg)">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col text-center">

                    <h1><?php echo $article['title']; ?></h1>

                </div>
            </div>
        </div>
    </div><!-- Page Banner Section End -->

    <!-- Blog Section Start -->
    <div class="blog-section section mt-80 mt-lg-60 mt-md-60 mt-sm-60 mt-xs-40 mb-40 mb-lg-20 mb-md-20 mb-sm-20 mb-xs-0">
        <div class="container">
            <div class="row row-30">

                <div class="col-xl-9 col-lg-8 col-12 order-1 order-lg-2 mb-40">
                    <div class="single-blog">
					    <?php 
							$img=$article->getImage();
						?>
                        <div class="image-wrap">
                            <h4 class="date"></h4>
                            <a class="image" href="/article/show/<?php echo $article['id'];?>"><img src="<?php echo $img->getUrl('800x'); ?>" alt=""></a>
                        </div>
                        <div class="content">
                           
                            <div class="desc">
                                <?php echo $article['content'];?>
                            </div>

                            
                        </div>
                    </div>
                    
                </div>

                <div class="col-xl-3 col-lg-4 col-12 order-2 order-lg-1 mb-40">

				    <div class="sidebar">
                        <h4 class="sidebar-title">Категории товаров</h4>
                        <ul class="catalog sidebar-list">
                           <?php echo MenuWidget::widget(); ?>
                        </ul>
                      
                    </div>
                    

                    <div class="sidebar">
                        <h4 class="sidebar-title">Другие статьи</h4>
						
                        <div class="sidebar-blog-wrap">
						<?php foreach($articles as $art): ?>
                            <div class="sidebar-blog">
							<?php $imgArt=$art->getImage();?>
                                <a href="/article/show/<?php echo $art['id']; ?>" class="image"><img src="<?php echo $imgArt->getUrl(); ?>" alt=""></a>
                                <div class="content">
                                    <a href="/article/show/<?php echo $art['id']; ?>" class="title"><?php echo $art['title']; ?></a>
                                    <span class="date"></span>
                                </div>
                            </div>
                            
						<?php endforeach; ?>	
                        </div>
                    </div>

                    

                </div>

            </div>
        </div>
    </div><!-- Blog Section End -->

    <!-- Brand Section Start -->
    <div class="brand-section section mb-80 mb-lg-60 mb-md-60 mb-sm-60 mb-xs-40">
        <div class="container-fluid">
            <div class="row">
                <div class="brand-slider">

                    <div class="brand-item col">
                        <img src="assets/images/brands/brand-1.png" alt="">
                    </div>

                    <div class="brand-item col">
                        <img src="assets/images/brands/brand-2.png" alt="">
                    </div>

                    <div class="brand-item col">
                        <img src="assets/images/brands/brand-3.png" alt="">
                    </div>

                    <div class="brand-item col">
                        <img src="assets/images/brands/brand-4.png" alt="">
                    </div>

                    <div class="brand-item col">
                        <img src="assets/images/brands/brand-5.png" alt="">
                    </div>

                    <div class="brand-item col">
                        <img src="assets/images/brands/brand-6.png" alt="">
                    </div>

                </div>
            </div>
        </div>
    </div><!-- Brand Section End -->