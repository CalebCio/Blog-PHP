<section>
<div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-3 p-3 text-bg-light">
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><a href="#" class="btn btn-secondary"><i class="bi bi-person-fill"></i><?php echo $_SESSION['username']; ?></i></a></li>
            <li class="list-group-item"><a class="text-secondary" href="<?php echo BASE_URL . "/admin/posts/index.php" ?>">Manage Posts</a></li>
            <li class="list-group-item"><a class="text-secondary" href="<?php echo BASE_URL . "/admin/users/index.php" ?>">Manage Users</a></li>
            <li class="list-group-item"><a class="text-secondary" href="<?php echo BASE_URL . "/admin/topics/index.php" ?>">Manage Topics</a></li>
            <li class="list-group-item"><a class="btn btn-secondary" href="<?php echo BASE_URL . '/index.php' ?>">Home</a></li>
            <li class="list-group-item"><a class="btn btn-danger" href="<?php echo BASE_URL . "/logout.php"; ?>">Log out</a></li>


        </ul>
    </div>
    
