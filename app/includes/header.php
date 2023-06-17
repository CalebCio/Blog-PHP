<header>

    <nav class="navbar navbar-expand-md fixed-top bg-white navbar-light">
        <div class="container-xxl">

           
            <a href="<?php echo BASE_URL . '/index.php' ?>" class="navbar-brand">
                <span class="fw-bold text-secondary">
                    Vell<span class="fw-bold text-warning">Magazine</span>
                    <i class="bi bi-book-half"></i>
                </span>
            </a>

            <!-- Toggle button for mobile nav-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <!-- Navbar Links -->
            <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
                <ul class="navbar-nav">
                    <?php foreach ($topics as $key => $topic): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name']; ?>"><?php echo $topic['name']; ?></a>
                    </li>
                    <?php endforeach; ?>

                    <?php if(isset($_SESSION['id'])): ?>
                    <li class="nav-item ms-2">
                    <div class="dropstart">
                        <a href="#" class="btn btn-secondary dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-fill"></i><?php echo $_SESSION['username']; ?><i class="bi bi-chevron-down"></i></a>
                        <ul class="dropdown-menu">

                            <?php if($_SESSION['admin']): ?>

                                <li class="nav-item ms-2 dropdown-item"><a class="btn btn-secondary" href="<?php echo BASE_URL . "/admin/dashboard.php" ?>">Dashboard</a></li>

                        <?php endif; ?>

                        <li class="nav-item ms-2 dropdown-item"><a class="btn btn-secondary" href="<?php echo BASE_URL . "/logout.php"; ?>">Logout</a></li>
                        </ul>
                        </div>
                    </li>
                <?php else: ?>
                    <li class="nav-item ms-2 "><a class="btn btn-light" href="<?php echo BASE_URL . "/signup.php"?>">Sign Up</a></li>
                    <li class="nav-item ms-2 "><a class="btn btn-light" href="<?php echo BASE_URL . "/login.php"; ?>">Login</a></li>
                <?php endif; ?>  

                </ul>
            </div>

        </div>
    </nav>

</header>