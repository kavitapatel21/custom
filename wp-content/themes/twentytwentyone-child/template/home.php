<?php 
/**
 * Template Name:   home
 * Template Post Type:post,page,my-post-type;
 */
get_header();
?>

 <!-- ***** Welcome Area Start ***** -->
 <div class="welcome-area" id="welcome">

<!-- ***** Header Text Start ***** -->
<div class="header-text">
    <div class="container">
        <div class="row">
            <div class="left-text col-lg-6 col-md-12 col-sm-12 col-xs-12"
                data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                <h1>Simple App that we <em>CREATE</em></h1>
                <p>Lava <a href="#">HTML landing page</a> template is provided by <a href="#">TemplateMo</a>.
                   You can modify and use it for your commercial websites for free of charge. This template is last updated on 29 Oct 2019.</p> 
                <a href="#about" class="main-button-slider">KNOW US BETTER</a>
            </div>
        </div>
    </div>
</div>
<!-- ***** Header Text End ***** -->
</div>
<!-- ***** Welcome Area End ***** -->

<!-- ***** Features Big Item Start ***** -->
<section class="section" id="about">
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
            data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
            <div class="features-item">
                <div class="features-icon">
                    <h2>01</h2>
                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/features-icon-1.png" alt="">
                    <h4>Trend Analysis</h4>
                    <p>Curabitur pulvinar vel odio sed sagittis. Nam maximus ex diam, nec consectetur diam.</p>
                    <a href="#testimonials" class="main-button">
                        Read More
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
            data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
            <div class="features-item">
                <div class="features-icon">
                    <h2>02</h2>
                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/features-icon-2.png" alt="">
                    <h4>Site Optimization</h4>
                    <p>Curabitur pulvinar vel odio sed sagittis. Nam maximus ex diam, nec consectetur diam.</p>
                    <a href="#testimonials" class="main-button">
                        Discover More
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
            data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
            <div class="features-item">
                <div class="features-icon">
                    <h2>03</h2>
                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/features-icon-3.png" alt="">
                    <h4>Email Design</h4>
                    <p>Curabitur pulvinar vel odio sed sagittis. Nam maximus ex diam, nec consectetur diam.</p>
                    <a href="#testimonials" class="main-button">
                        More Detail
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- ***** Features Big Item End ***** -->

<div class="left-image-decor"></div>

<!-- ***** Features Big Item Start ***** -->
<section class="section" id="promotion">
<div class="container">
    <div class="row">
        <div class="left-image col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix-big"
            data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/left-image.png" class="rounded img-fluid d-block mx-auto" alt="App">
        </div>
        <div class="right-text offset-lg-1 col-lg-6 col-md-12 col-sm-12 mobile-bottom-fix">
            <ul>
                <li data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/about-icon-01.png" alt="">
                    <div class="text">
                        <h4>Vestibulum pulvinar rhoncus</h4>
                        <p>Please do not redistribute this template ZIP file for a download purpose. You may <a
                        rel="nofollow" href="https://templatemo.com/contact" target="_parent">contact</a> us for
                    additional licensing of our template or to get a PSD file.</p>
                    </div>
                </li>
                <li data-scroll-reveal="enter right move 30px over 0.6s after 0.5s">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/about-icon-02.png" alt="">
                    <div class="text">
                        <h4>Sed blandit quam in velit</h4>
                        <p>You can <a rel="nofollow"
                                href="https://templatemo.com/tm-540-lava-landing-page">download Lava
                                Template</a> from our website. Duis viverra, ipsum et scelerisque placerat, orci
                            magna consequat ligula.</p>
                    </div>
                </li>
                <li data-scroll-reveal="enter right move 30px over 0.6s after 0.6s">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/about-icon-03.png" alt="">
                    <div class="text">
                        <h4>Aenean faucibus venenatis</h4>
                        <p>Phasellus in imperdiet felis, eget vestibulum nulla. Aliquam nec dui nec augue
                            maximus porta. Curabitur tristique lacus.</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
</section>
<!-- ***** Features Big Item End ***** -->
<!-- ***** Features small Item Start ***** -->
<section class="section" id="about">
<div class="container">
<div class="row">
<?php
$args = array(
'post_type'=> 'post',
'orderby'    => 'ID',
'post_status' => 'publish',
'order'    => 'DESC',
'posts_per_page' => -1 // this will retrive all the post that is published 
);
$result = new WP_Query( $args );
if ( $result-> have_posts() ) : ?>
<?php while ( $result->have_posts() ) : $result->the_post(); ?>
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
            <div class="features-item">
                <div class="features-icon">
                <img src =<?php the_post_thumbnail('thumbnail');?>
                <h4><?php the_title(); ?> </h4>
                <p><?php the_content();?> </p>
                <a href=<?php the_permalink();?> class="main-button">
                        Read More
                    </a>
                </div>
            </div>
         </div>
<?php endwhile; ?>
<?php endif; wp_reset_postdata(); ?>
</div>
</div>
</section>
<!-- ***** Features Small Item End ***** -->


<div class="right-image-decor"></div>

<!-- ***** Testimonials Starts ***** -->
<section class="section" id="testimonials">
<div class="container">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <div class="center-heading">
                <h2>What They Think <em>About Us</em></h2>
                <p>Suspendisse vitae laoreet mauris. Fusce a nisi dapibus, euismod purus non, convallis odio.
                    Donec vitae magna ornare, pellentesque ex vitae, aliquet urna.</p>
            </div>
        </div>
        <div class="col-lg-10 col-md-12 col-sm-12 mobile-bottom-fix-big"
            data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
            <div class="owl-carousel owl-theme">      
        <?php
         $args = array(
'post_type'=> 'product-post',
'orderby'    => 'ID',
'post_status' => 'publish',
'order'    => 'DESC',
'posts_per_page' => -1 // this will retrive all the post that is published 
);
$result = new WP_Query( $args );
if ( $result-> have_posts() ) : ?>
<?php while ( $result->have_posts() ) : $result->the_post(); ?>
<div class="item service-item">
                    <div class="author" id="testimonials">
                        <i>
                        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>    
                        <img src="<?php echo $url ?>" /></i>
                    </div>
                    <div class="testimonial-content">
                        <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <h4><?php the_title(); ?></h4>
                        <p><?php the_content();?></p>
                        <span><?php the_title(); ?></span>
                    </div>
                    </div>
                <?php endwhile; ?>
<?php endif; wp_reset_postdata(); ?>  
            </div>
        </div>
    </div>
</div>
</section>
<!-- ***** Testimonials Ends ***** -->

<?php do_shortcode("[displaydata]")?>

<?php
get_footer();
?>