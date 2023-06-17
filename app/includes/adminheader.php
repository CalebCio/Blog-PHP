<header>
    <nav class="navbar navbar-expand-md fixed-top bg-white navbar-light">
        <div class="container-xxl">
            
            <a href="<?php echo BASE_URL . '/index.php' ?>" class="navbar-brand">
                <span class="fw-bold text-secondary">
                    Vell<span class="fw-bold text-warning">Magazine</span>
                    <i class="bi bi-book-half"></i>
                </span>
            </a>

            <li class="nav-item ms-2 d-md-inline">
                <a href="#" class="btn btn-secondary"><i class="bi bi-person-fill"></i><?php echo $_SESSION['username']; ?><i class="bi bi-chevron-down"></i></a>
                <ul>
                    <li class="nav-item ms-2 d-none"><a class="btn btn-secondary" href="<?php echo BASE_URL . "/logout.php"; ?>">Logout</a></li>
                </ul>
            </li>
                 
        </div>
    </nav>

</header>