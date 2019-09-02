<?php
    use yii\helpers\Html;
	use yii\helpers\Url;
?>
<!-- Hero Section Start -->
    <div class="hero-section section">

        <!-- Hero Slider Start -->
        <div class="hero-slider hero-slider-one fix">

            <!-- Hero Item Start -->
            <div class="hero-item" style="background-image: url(images/hero/hero-1.jpg)">

                <!-- Hero Content -->
                <div class="hero-content">

                    <h1>Получите 35% скидку от цены<br>последней купленной игрушки</h1>
                    <a href="/catalog">КУПИТЬ СЕЙЧАС</a>

                </div>

            </div><!-- Hero Item End -->

            <!-- Hero Item Start -->
            <div class="hero-item" style="background-image: url(images/hero/hero-2.jpg)">

                <!-- Hero Content -->
                <div class="hero-content">

                    <h1>Получите 35% скидку от цены<br>последней купленной игрушки</h1>
                    <a href="/catalog">КУПИТЬ СЕЙЧАС</a>

                </div>

            </div><!-- Hero Item End -->
			
			<!-- Hero Item Start -->
            <div class="hero-item" style="background-image: url(images/hero/hero-3.jpg)">

                <!-- Hero Content -->
                <div class="hero-content">

                    <h1>Получите 35% скидку от цены<br>последней купленной игрушки</h1>
                    <a href="/catalog">КУПИТЬ СЕЙЧАС</a>

                </div>

            </div><!-- Hero Item End -->

        </div><!-- Hero Slider End -->

    </div><!-- Hero Section End -->
 <!-- Banner Section Start -->
    <div class="banner-section section mt-40 mt-xs-20 mb-60 mb-lg-40 mb-md-40 mb-sm-40 mb-xs-20">
        <div class="container-fluid">
            <div class="row row-10">

                <div class="col-lg-4 col-md-6 col-12 mb-20">
                    <div class="banner banner-1 content-left content-middle">

                        <a href="/catalog/7" class="image"><img style="opacity: 0.8;" src="images/banner/banner-1.jpg" alt="Паззлы"></a>

                        <div class="content">
                            <h1>Детские паззлы <br>Деревянные и обычные <br>ПРЕКРАСНАЯ ЦЕНА</h1>
                            <a href="/catalog/6" data-hover="КУПИТЕ СЕЙЧАС">КУПИТЕ СЕЙЧАС</a>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-20">
                    <a href="/catalog/5" class="banner banner-2">

                        <img src="images/banner/banner-2.jpg" alt="Детские конструкторы">

                        <div class="content bg-theme-one">
                            <h1>Детс кие конст
								рук
								торы</h1>
                        </div>

                        <span class="banner-offer">-10%</span>

                    </a>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-20">
                    <div class="banner banner-1 content-left content-top">

                        <a href="/catalog/2" class="image"><img  style="opacity: 0.6;" src="images/banner/banner-3.jpg" alt="Наборы фигурок"></a>

                        <div class="content">
                            <h1>Наборы <br>фигурок</h1>
                            <a href="/catalog/2" data-hover="КУПИТЕ СЕЙЧАС">КУПИТЕ СЕЙЧАС</a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div><!-- Banner Section End -->

    <!-- Product Section Start -->
    <div class="product-section section mb-40 mb-lg-20 mb-md-20 mb-sm-20 mb-xs-0">
        <div class="container">
            <?php if(!empty($hits)):?>
                <div class="row">
                    <div class="section-title text-left col mb-30">
                        <h1>Хиты продаж</h1>
                        <p>Все популярные товары вы найдете здесь</p>
                    </div>
                </div>

                <div class="row">

                    <?php foreach($hits as $hit): ?>

                        <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-40">

                            <div class="product-item">
                                <div class="product-inner">

                                    <div class="image">
									    <?php $mainImg=$hit->getImage(); ?>
                                        <?php //echo Html::img('@web/images/product/'.$hit['img'],['alt'=>$hit['name']]);?>
                                        <img src="<?php echo $mainImg->getUrl(); ?>" alt="<?php echo $hit['name']; ?>">
                                        <div class="image-overlay">
                                            <div class="action-buttons">
                                                <button class="add_to_cart" data-id="<?php echo $hit->id;?>">в корзину</button>
                                                
                                            </div>
                                        </div>

                                    </div>

                                    <div class="content">

                                        <div class="content-left">

                                            <h4 class="title"><a href="/catalog/product/<?php echo $hit['id'];?>"><?php echo $hit['name']; ?></a></h4>

                                           
                                        </div>

                                        <div class="content-right">
                                            <span class="price"><?php echo $hit['price']." руб."; ?></span>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
						
                    <?php endforeach; ?>
					
                </div>
				
            <?php endif; ?>
        </div>
    <!--</div><!-- Product Section End -->

   
    <!-- Product Section Start -->
    <!--<div class="product-section section mb-40 mb-lg-20 mb-md-20 mb-sm-20 mb-xs-0">-->
     <div class="container"> 
            <div class="row">

                <div class="col-lg-4 col-md-6 col-12 mb-40">
  
						<div class="row">
							<div class="section-title text-left col mb-30">
								<h1>Новости и статьи</h1>
								<p>Все самое интересное</p>
							</div>
						</div>

						<div class="row">
                            <?php foreach($articles as $article): ?>
							
							<div class="col-12 mb-40"">
								
								<div>
								    <h4 class="title"><a href="/article/show/<?php echo $article['id'];?>"><?php echo $article['title'];?></a></h4>
									<div  style=" padding-top:10px; padding-bottom:10px;" >
								
										<?php 
											$img=$article->getImage();
										?>
										<a class="image" href="/article/show/<?php echo $article['id'];?>"><img src="<?php echo $img->getUrl('300x'); ?>" alt=""></a>
									</div>
									<div class="content" style="float: left;">
										
										<div class="desc">
										    <?php
											  $res_content=substr(strip_tags($article['content']),0,300);
											  $pos=strlen($res_content)-1;
											  while($pos>0){
											     if(strcmp(substr($res_content,$pos,1)," ")==0)
												 break;
											     $pos--;
											  }	 
											  
											  $res_content=trim(substr($res_content,0,$pos+1))." ...";
											  
											?>
											<p style="text-align: justify;"><?php echo $res_content;?></p>
										</div>
										
									</div>
								</div>
							</div>
							<?php endforeach; ?>
							

						</div>
						

                </div>

                <div class="col-lg-8 col-md-6 col-12 pl-50 pl-sm-15 pl-xs-15">

                    <div class="row" style="margin-bottom:20px;">
                        <div class="section-title text-left col mb-30">
                            <h1>Скидки</h1>
                            <p>Отличные цены найдете здесь</p>
                        </div>
                    </div>



                    <div class="row" style="margin-bottom:30px;">
                        <?php $count=0; foreach($sales as $sale): ?>
						<?php if($count==0) echo "<div class='row' style='padding-bottom:20px;'>"; ?>
                         
                                <div class="on-sale-product col-lg-4" >
                                    <a href="/catalog/product/<?php echo $sale['id'];?>" class="image">
									    <?php 
											$mainImg=$sale->getImage(); 
											$count=$count+1;
											if($count==3) $count=0;
										?>
                                        <?php //echo Html::img('@web/images/product/'.$sale['img'],
                                            //['alt'=>$sale['name']]);?>
										<img src="<?php echo $mainImg->getUrl('174x165'); ?>"  alt="<?php echo $sale['name']; ?>">	
									</a>
                                    <div class="content text-center">
                                        <h4 class="title"><a href="/catalog/product/<?php echo $sale['id'];?>"><?php echo $sale['name'];?></a></h4>
                                        <span class="price"><?php echo $sale['price'];?> руб. <!--<span class="old">$35</span>--></span>
                                       
                                    </div>
                                </div>

						<?php if($count==0) echo "</div>"; ?>	
                        <?php endforeach; ?>

                    </div>

                </div>

            </div>
        </div>
    </div><!-- Product Section End -->

    <!-- Feature Section Start -->
    <div class="feature-section section bg-theme-two pt-65 pt-lg-55 pt-md-45 pt-sm-45 pt-xs-25 pb-65 pb-lg-55 pb-md-45 pb-sm-45 pb-xs-25 fix" style="background-image: url(images/pattern/pattern-dot.png);">
        <div class="container">
            <div class="feature-wrap row justify-content-between">

                <div class="col-md-4 col-12 mt-15 mb-15">
                    <div class="feature-item text-center">

                        <div class="icon"><img src="images/feature/feature-1.png" alt=""></div>
                        <div class="content">
                            <h3>Бесплатная доставка</h3>
                            <p>на заказы от 3000 руб</p>
                        </div>

                    </div>
                </div>

                <div class="col-md-4 col-12 mt-15 mb-15">
                    <div class="feature-item text-center">

                        <div class="icon"><img src="images/feature/feature-2.png" alt=""></div>
                        <div class="content">
                            <h3>Гарантированное качество</h3>
                            <p>Возврат в течение 25 дней</p>
                        </div>

                    </div>
                </div>

                <div class="col-md-4 col-12 mt-15 mb-15">
                    <div class="feature-item text-center">

                        <div class="icon"><img src="images/feature/feature-3.png" alt=""></div>
                        <div class="content">
                            <h3>Абсолютная надежность</h3>
                            <p>Только качественные товары</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div><!-- Feature Section End -->

    <div class="row" style="height: 30px;">
		<div style="margin-left: 100px;"></div>
	</div>

    <!-- Brand Section Start -->
    <div class="brand-section section mb-80 mb-lg-60 mb-md-60 mb-sm-60 mb-xs-40" style="margin-top: 40px;">
        <div class="container-fluid">
            <div class="row">
                <div class="brand-slider">

                    <div class="brand-item col">
                        <img src="images/brands/brand-1.png" alt="">
                    </div>

                    <div class="brand-item col">
                        <img src="images/brands/brand-2.png" alt="">
                    </div>

                    <div class="brand-item col">
                        <img src="images/brands/brand-3.png" alt="">
                    </div>

                    <div class="brand-item col">
                        <img src="images/brands/brand-4.png" alt="">
                    </div>

                    <div class="brand-item col">
                        <img src="images/brands/brand-5.png" alt="">
                    </div>

                    <div class="brand-item col">
                        <img src="images/brands/brand-6.png" alt="">
                    </div>

                </div>
            </div>
        </div>
    </div><!-- Brand Section End -->