<?php 
/**
 * Template Name:  testimonial
 * Template Post Type:post,page,my-post-type;
 */
?>

<html>
<head>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/custompost.css ?>">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container blog-page">
<div class="row">
<?php
$args = array(
'post_type'=> 'testimonial-one',
'orderby'    => 'ID',
'post_status' => 'publish',
'order'    => 'DESC',
'posts_per_page' => 10 // this will retrive all the post that is published 
);
$result = new WP_Query( $args );
if ( $result-> have_posts() ) : ?>
<?php while ( $result->have_posts() ) : $result->the_post(); ?>
<div class="col-sm-4">
            <div class="card single_post">
                <div class="header">
                <div class="img-post m-b-15">
                        <img src=<?php the_post_thumbnail('thumbnail');?>
                    </div>
                </div>
                <div class="body">
                <h2><strong><?php the_title(); ?> </strong></h2>
                 <h3>Author:<?php echo get_field('author'); ?></h3>
                  <?php //<p><?php echo substr(strip_tags($post->post_content), 0, 40);?></p> 
                  <p><?php echo substr(get_the_content(), 0, 40);?></p>
                    <a href=<?php the_permalink();?> title="read more" class="btn btn-round btn-info">Read More</a>
                </div>
            </div>
</div>
<?php endwhile; ?>
<?php endif; wp_reset_postdata(); ?>
</div>     
</div>
</body>
</html>
