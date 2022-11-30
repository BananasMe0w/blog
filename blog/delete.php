<?php
  include "connect.php";

  $id = $_GET['blog_id'];
  $sql = "DELETE FROM `blog`.`tbl_blog` WHERE `tbl_blog`.`blog_id` = '$id'";
  $result = $con->query($sql);

  echo "
  <script type='text/javascript'>
    location='index.php';
  </script>
  ";
?>
