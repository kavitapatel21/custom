<?php
require_once("../../../../wp-config.php");
require_once("../../../../wp-load.php");
global $wpdb;
 
     $firstname = $_POST['firstname'];
     $lastname = $_POST['lastname'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
     $message = $_POST['message'];
     $tablename = $wpdb->prefix."data";
          $insert_sql = "INSERT INTO ".$tablename."(firstname,lastname,email,phone,message)
           values('" . $firstname . "','" . $lastname . "','" . $email . "','" . $phone . "','" . $message . "') ";
          $wpdb->query($insert_sql);
          if($insert_sql)
          {
             $data = 0;
          }
          else {
             $data = 1;
          }
              echo json_encode($data);
?>

      