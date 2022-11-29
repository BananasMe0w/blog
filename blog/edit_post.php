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
                <form action="create_post_script.php" method="post">
                  <div class="col-12">
                    <?php
                      $sql = "SELECT * FROM tbl_blog";
                      $result = $con->query($sql);
                      $row = $result->fetch_assoc();
                    ?>
                    <textarea placeholder="  write what you think..." rows="12" cols="120" name="post_blog" value="<?php echo $row['blog']; ?>"></textarea>
                  </div>
                  <div class="col-12 mt-5">
                    <button class="btn btn-success" type="submit">edit</button>
                  </div>
                </form>
              </div>
          </div>
        </div>
      </div>
    </div>

    <script src="js/jquery.js" charset="utf-8"></script>
    <script src="js/bootstrap.js" charset="utf-8"></script>
  </body>
</html>
