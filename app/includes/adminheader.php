<header>

    <div class="header__section">

        <div class="top__menu">

            <a class="title_header" href="<?php echo BASE_URL . "/index.php" ?>">
                <p>Vell Magazine</p>
            </a>

            <div class="user">

                <?php if(isset($_SESSION['username'])): ?>
                    <li>
                        <a href="#"><span class="material-icons">person</span><?php echo $_SESSION['username']; ?> <i class="fas fa-chevron-down"></i></a>
                        <ul>
                        <li><a href="<?php echo BASE_URL . "/logout.php"; ?>" class="logout">Logout</a></li>
                        </ul>
                    </li>
                <?php endif; ?>
                
            </div>

        </div>

    </div>

</header>