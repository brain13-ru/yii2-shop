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

                    <h1>Статьи и новости</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="/">Главная</a></li>
                        <li><a href="/article">Статьи и новости</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div><!-- Page Banner Section End -->

    <!-- Blog Section Start -->
    <div class="blog-section section mt-80 mt-lg-60 mt-md-60 mt-sm-60 mt-xs-40 mb-80 mb-lg-60 mb-md-60 mb-sm-60 mb-xs-40">
        <div class="container">
            <div class="row">
                <?php foreach ($articles as $article): ?>
                <div class="col-lg-6 col-12 mb-60 mb-xs-40">
                    <div class="blog-item">
                        <div class="image-wrap">
                            <!--<h4 class="date">May <span>25</span></h4>-->
							<?php $mainImg=$article->getImage(); ?>
                            <a class="image" href="/article/show/<?php echo $article['id'];?>"><img src="<?php echo $mainImg->getUrl('209x'); ?>" alt=""></a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="/article/show/<?php echo $article['id'];?>"><?php echo $article['title'];?></a></h4>
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
                                <p><?php echo $res_content;?></p>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
               
				<?php echo LinkPager::widget([
                        'pagination' => $pages,
                        ]); 
				?>
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