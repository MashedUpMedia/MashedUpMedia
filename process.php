<?php
// Get Data	
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$phone = strip_tags($_POST['phone']);
$message = strip_tags($_POST['message']);

// Send Message
mail( "contactform@mashedupmedia.com", "Contact Form Submission",
"Name: $name\nEmail: $email\nPhone: $phone \n \n$message\n",
"From:  $name (MashedUpMedia Contact Form)" );
?>