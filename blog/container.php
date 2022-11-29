<?php
  include "connect.php";

  $sql = "SELECT * FROM tbl_blog";
  $result = $con->query($sql);

  while($row = $result->fetch_assoc()){
    if ($row['blog'] <> '') {
?>
  <div class="container mt-5 border border-dark p-4">
    <div class="row">
      <div class="col-1">

      </div>
      <div class="col-10">
        <h4><?php echo $row['name']; ?></h4>
        <hr>
        <p>
          <?php echo $row['blog']; ?>
        </p>
        <br>
        <p align="right">
          Added at <?php echo $row['date'] ?>
          <br>
          <br>
          <sup>when <?php echo $row['time'] ?></sup>
        </p>
      </div>
    </div>
  </div>
<?php }} ?>
