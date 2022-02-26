<html><head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<?php
/*
Plugin Name: Form
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author: ABC
Version: 1.0
*/

add_action( 'admin_menu', 'my_menu_page' );

function my_menu_page(){
	add_menu_page(
		'Submitted All Query', // page <title>Title</title>
		'custom form', // menu link text
		'manage_options', // capability to access the page
		'', // page URL slug
		'myform', // callback function /w content
		'dashicons-star-half', // menu icon
		5 // priority
	);
}
?>
<?php 
function myform()
{?>
<h1 align="center"> Submit Your Inquiry</h1>
<div style="width:50%;margin-left: 389px;margin-top: 80px">
	<form name="myform" method="post" action="" id="form">	 
  <div class="form-row">
  <div class="form-group">
    <input type="email" class="form-control" name="firstname" placeholder="Firstname">
  </div>
  <div class="form-group">
    <input type="email" class="form-control" name="lastname" placeholder="Lastname">
  </div>
  <div class="form-group">
    <input type="email" class="form-control" name="email" placeholder="E-mail">
  </div>
  <div class="form-group">
    <input type="number" class="form-control" name="phone" placeholder="Phone">
  </div>
  <div class="form-group">
    <textarea class="form-control" name="message" rows="3" placeholder="Message" type="text"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" >Submit</button>
</div>
</form>
<?php } ?>
</body>
</html>
