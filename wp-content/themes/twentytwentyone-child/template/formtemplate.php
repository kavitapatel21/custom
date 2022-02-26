<html><head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
</head>
<?php 
/**
 * Template Name: formtemplate
 * Template Post Type:post,page,my-post-type;
 */
?>
<body>
<h1 align="center"> Submit Your Inquiry</h1>
<div style="width:50%;margin-left: 389px;margin-top: 30px">
	<form name="form" method="post" action="" id="form">	 
  <div class="form-row">
  <div class="form-group">
    <input type="text" class="form-control" name="firstname" placeholder="Firstname">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="lastname" placeholder="Lastname">
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
  <button type="submit" class="btn btn-primary" name="btnsubmit">Submit</button>
</div>
<div align="center" id="success"></div>
</form>

<script>
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='form']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      firstname: "required",
      lastname: "required",
      phone: {
        required: true,
        maxlength: 10,
      },
      email: {
        required:true,
        email:true,
        remote: {
            url: '<?php echo get_stylesheet_directory_uri();?>/template/email.php',
            type: "post",
        }
},  
    },
    // Specify validation error messages
    messages: {
      firstname: "Please enter your firstname",
      lastname: "Please enter your lastname",
      phone: {
        required: "Please provide your contact no",
        maxlength: "maximum ten number valid"
      },
      email: {
                    required: "Please enter your email address.",
                    email: "Please enter a valid email address.",
                    remote: "email is already taken."
                 },
     },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
  
  submitHandler: function(form) {
  jQuery.ajax({
  type: "POST",
  data: jQuery('form').serialize(), 
  url: "<?php echo get_stylesheet_directory_uri();?>/template/ajax.php",
  success: function(data) {
    if(data==0)
                { 
                  jQuery('#success').html('Signup successful!');
                }
                else
                {
                  jQuery('#success').html('Signup not successful!');
                }
                
  }
});
    }
  });
});
</script>
</body>
</html>