<?php
  $db_host = 'localhost';
  $db_name = 'quizbuddy';
  $db_user = 'root';
  $db_password= '';

  $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

  if ($conn->connect_error) {
    printf("connect failed: %s\n",$conn->connect_error);
    exit();
  }
 ?>
