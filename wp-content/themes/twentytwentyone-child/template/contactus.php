<?php 
/**
 * Template Name:   contact-us
 * Template Post Type:post,page,my-post-type;
 */
?>
<div align="center">
        <h3>Name:<?php echo get_field('name'); ?></h3>
        <h3>Contact No:<?php echo get_field('contact_no'); ?></h3>
        <h3>Email:<?php echo get_field('e-mail'); ?></h3>   
        <h3>Color:
            <?php
$colors = get_field('checkbox');
if( $colors ): ?>
    <?php foreach( $colors as $color ): ?>
        <h3><?php echo $color; ?></h3>
    <?php endforeach; ?>
</ul>
</h3>
<?php endif; ?>
    


        <h3>Gender:<?php echo get_field('radiobutton'); ?></h3>        
        <?php $image=get_field('image'); ?>
        <img src="<?php echo $image['url'];?>" width="150px" height="150px">
</div>
           