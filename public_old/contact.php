<?php 
var_dump($_REQUEST);
  $admin_email = "venu.malaka@gmail.com";
  $comment = $_REQUEST['content'];
  
  //send email
  $d = mail($admin_email, "subject", $comment, "From:" . $admin_email);
var_dump($d);

  
  //Email response
  echo "Thank you for contacting us!";
?>