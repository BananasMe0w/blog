<?php
  include "connect.php";

  $posted = $_POST['post_blog'];
  $id = $_GET['id'];

  $sql = "UPDATE `tbl_blog` SET `blog` = '$posted' WHERE `tbl_blog`.`blog_id` = '$id';";
  $result = $con->query($sql);

  echo "
  <script type='text/javascript'>
    location='index.php';
  </script>
  ";
?>
