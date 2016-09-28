<?php 
var_dump($_REQUEST);
  $admin_email = "venu.malaka@gmail.com";
  $comment = $_REQUEST['content'];
  
  //send email
  mail($admin_email, "subject", $comment, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
?>