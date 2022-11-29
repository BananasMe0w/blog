<?php
  include "connect.php";

  $blog = $_POST['post_blog'];
  $name = $_SESSION['sess_name'];
  date_default_timezone_set('UTC');
  $date = date("d/m/Y");
  $time = date("H:i:sa");

  if ($blog=='') {
    echo "
    <script type='text/javascript'>
      alert('cannot invalid');
      location='create_post.php';
    </script>
    ";
  }else {
    $sql = "SELECT * FROM tbl_blog WHERE blog";
    $result = $con->query($sql);

    if($result) {
      $sql = "INSERT INTO `tbl_blog` (`name`, `blog`, `date`, `time`) VALUES ('$name', '$blog', '$date', '$time')";
      $result = $con->query($sql);

      echo "
      <script type='text/javascript'>
        location='index.php';
      </script>
      ";
      }
    }
?>
