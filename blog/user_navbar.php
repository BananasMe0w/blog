<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php"><h4>TENTIP</h4></a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="create_post.php"><button class="btn btn-info rounded-pill" type="button">+ create new post</button></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"><button class="btn text-light" type="button">Welcome <?php echo $_SESSION['sess_name']; ?></button> </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="edit_post.php">Edit Post</a>
          <hr>
          <a class="dropdown-item" href="logout.php">Log out</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
