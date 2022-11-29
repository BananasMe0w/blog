<?php
  $host = "localhost";
  $user = "root";
  $d_password = "meowmeow";
  $database = "blog";

  $con = new mysqli($host, $user, $d_password, $database);
  session_start();

  if ($con->connect_error) {
    echo "could not connect";
  }
?>
