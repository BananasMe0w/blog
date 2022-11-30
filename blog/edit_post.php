<!DOCTYPE html>
<html lang="th" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="utf-8">
    <title>TenTip</title>
  </head>
  <body>
    <?php include "checknav.php"; ?>

      <div class="container mt-5">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header bg-info">
                <h3 class="text-white">Edit Post</h3>
              </div>
              <div class="card-body">
                <?php
                  $id = $_GET['id'];

                  $sql = "SELECT * FROM tbl_blog WHERE `tbl_blog`.`blog_id`='$id'";
                  $result = $con->query($sql);

                  $row = $result->fetch_assoc();
                ?>
                  <div class="col-12">
                    <textarea rows="14" cols="140" name="post_blog"><?php echo $row['blog'];?></textarea>
                  </div>
                  <div class="col-12 mt-5">
                    <button class="btn btn-success" type="button"><a class="text-decoration-none text-light" href="edit_post_script.php?id=<?php echo $row['blog_id']; ?>">edit</a></button>
                    <button class="btn btn-danger" type="button"><a class="text-decoration-none text-light" href="index.php">cancel</a></button>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <script src="js/jquery.js" charset="utf-8"></script>
    <script src="js/bootstrap.js" charset="utf-8"></script>
  </body>
</html>
