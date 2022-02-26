<?php
/*
Plugin Name: Three Box
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author: ABC
Version: 1.0
*/
?>
<?php
function sports_bench_create_db() {
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
   
    //* Create the custom table
    $table_name = $wpdb->prefix . 'boxdetails';
    $sql = "CREATE TABLE $table_name (
    id INTEGER NOT NULL AUTO_INCREMENT,
    title TEXT NOT NULL,
    details TEXT NOT NULL,
    PRIMARY KEY (id)
    ) $charset_collate;";
    dbDelta( $sql );
   }
   register_activation_hook( __FILE__, 'sports_bench_create_db' );
   register_activation_hook( __FILE__, 'selectdata' );
  
add_action( 'admin_menu', 'admin_menu_page' );

function admin_menu_page(){
	add_menu_page(
		'My Page Title', // page <title>Title</title>
		'tabledata', // menu link text
		'manage_options', // capability to access the page
		'data-slug', // page URL slug
		'addEntry', // callback function /w content
		'dashicons-star-half', // menu icon
		5 // priority
	);
}
?>

<?php // Add record ?>
<?php
function addEntry(){
global $wpdb;
if(isset($_POST['btn_submit'])){
  $id = $_POST['txt_id'];
  $name = $_POST['txt_title'];
  $details = $_POST['txt_details'];
  $tablename = $wpdb->prefix."boxdetails";
  if($id != '' && $name != '' && $details != ''){
     $check_data = $wpdb->get_results("SELECT * FROM ".$tablename." WHERE username='".$name."' ");
     if(count($check_data) == 0){
       $insert_sql = "INSERT INTO ".$tablename."(id,title,details) values('".$id."','".$name."','".$details."') ";
       $wpdb->query($insert_sql);
     }
   }
}?>
<h1>Add New Entry</h1>
<form method='post' action=''>
  <table>
    <tr>
      <td>Id</td>
      <td><input type='text' name='txt_id'></td>
    </tr>
    <tr>
     <td>Title</td>
     <td><input type='text' name='txt_title'></td>
    </tr>
    <tr>
     <td>Details</td>
     <td><input type='text' name='txt_details'></td>
    </tr>
    <tr>
     <td>&nbsp;</td>
     <td><input type='submit' name='btn_submit' value='Submit'></td>
    </tr>
 </table>
</form>
<?php } ?>

<?php
function selectdata()
{?>
<div id="box" style="display:flex;" >
  <?php
                        global $wpdb;
                        $tablename = $wpdb->prefix."boxdetails";
  $entriesList = $wpdb->get_results("SELECT * FROM ".$tablename." order by id asc");
    foreach($entriesList as $entry){
      $id = $entry->id;
      $name = $entry->title;
      $details = $entry->details;?>          
     <div id="subdiv" style="width: 33.33%; float:left; align-items:center; padding:100px;">
     <?php
      echo "<h2 align=center>".$id."</h2>";
      echo "<h4 align=center>".$name."</h4>";
      echo "<h5 align=center>".$details."</h5>";
    ?>
      </div>
    <?php } ?>
    </div>
  <?php
  }?>

<?php
add_shortcode('displaydata','selectdata');
?>