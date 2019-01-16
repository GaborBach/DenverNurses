<?php

  $email = $_REQUEST['email'] ;

  $message = $_REQUEST['message'] ;



  mail( "gaborbach@gmail.com", "Feedback Form Results",

    $message, "From: $email" );

  header( "Location: http://www.denvernurses.com/index.php" );

?>







