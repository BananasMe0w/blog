<!DOCTYPE html>
<html lang="th" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="utf-8">
    <title>TenTip</title>
  </head>
  <body>
    <?php include "navbar.php"; ?>

    <div class="container mt-5">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header bg-info">
              <h3 class="text-white">Sign up</h3>
            </div>
              <div class="card-body">
                <form action="signup_script.php" method="post">
                  <div class="col-12">
                    <label>Name :</label>
                    <input class="form-control" placeholder="name" type="text" name="name_signup" required>
                  </div>
                  <div class="col-12 mt-4">
                    <label>Email :</label>
                    <input class="form-control" placeholder="email" type="email" name="email_signup" required>
                  </div>
                  <div class="col-12 mt-4">
                    <label>Password :</label>
                    <input class="form-control" placeholder="password" type="password" name="password_signup" required>
                  </div>
                  <div class="col-12 mt-4">
                    <label>Repassword :</label>
                    <input class="form-control" placeholder="repassword" type="password" name="repassword_signup" required>
                  </div>
                  <div class="col-12 mt-5">
                    <button class="btn btn-success" type="submit">submit</button>
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
