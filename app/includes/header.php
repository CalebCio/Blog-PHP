   <header>

    <div class="header__section">

        <div class="top__menu">

            <div class="title_header">
                <a href="<?php echo BASE_URL . '/index.php' ?>"><p>Vell Magazine</p></a>
            </div>



            
            <div class="user">


            <?php if(isset($_SESSION['id'])): ?>
            <li>
                    <a href="#"><span class="material-icons">person</span><?php echo $_SESSION['username']; ?><i class="fas fa-chevron-down"></i></a>
                    <ul>

                        <?php if($_SESSION['admin']): ?>

                            <li><a href="<?php echo BASE_URL . "/admin/dashboard.php" ?>">Dashboard</a></li>

                       <?php endif; ?>

                       <li><a href="<?php echo BASE_URL . "/logout.php"; ?>" class="logout">Logout</a></li>
                    </ul>
                </li>
            <?php else: ?>
                        <li><a href="<?php echo BASE_URL . "/signup.php"?>">Sign Up</a></li>
                <li><a href="<?php echo BASE_URL . "/login.php"; ?>">Login</a></li>
            <?php endif; ?>  
            </div>

        </div>


        <div class="navigations">
            <a href="#">ARCHIEVE <i class="fas fa-chevron-down"></i> </a>
            <a href="#">WELLBEING</a>
            <a href="#">LIFE MATTERS</a>
            <a href="#">FASHION & BEAUTY</a>
            <a href="#">PETS/ANIMALS</a>
            <a href="#">ARTS & CULTURE</a>
            <a href="#">TRAVEL</a>
            <a href="#">SOCIAL MEDIA</a>
        </div>

    </div>

</header>