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
          <form action="edit_post_script.php" method="post">
            <a href="edit_post.php?id=<?php echo $row['blog_id']; ?>"><button class="btn btn-success" type="button">edit</button></a>
            <a href="delete.php?id=<?php echo $row['blog_id'] ?>"><button class="btn btn-danger" type="button">delete</button></a>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php }} ?>
