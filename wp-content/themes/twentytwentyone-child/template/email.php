<?php
require_once("../../../../wp-config.php");
require_once("../../../../wp-load.php");
global $wpdb;
/* check if email is already registered */
//connect to db using $wpdb

if (!empty($_POST['email']))
{
    $email = $_POST['email'];
    $sql = $wpdb->get_results("SELECT * FROM wp_data WHERE email = '$email'");
	
    $num = $wpdb->num_rows;
	if($num>=1)
	{
		echo 'false';
	}else{
		
		echo 'true';
	}
}
?>
