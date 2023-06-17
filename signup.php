<?php include("path.php"); ?>

<?php include (ROOT_PATH . "/app/controllers/users.php"); 

guestsOnly();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <!-- Linking Css file  -->
    <link rel="stylesheet" href="assets/CSS/styles.css">

    <!-- CDN LINK -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
    <style>
        section {
            padding: 60px 0;
        }
    </style>

</head>
<body>


<?php include(ROOT_PATH . "/app/includes/header.php"); ?>


<section>
    <div class="container-lg mt-5">
        <form action="signup.php" method="post">
            <h2>Sign Up</h2>
            <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

            <div class="form-floating mb-3 mt-3">
                <input type="text" name="username" class="form-control" id="email" value="<?php echo $username; ?>" placeholder="Enter Username">
                <label for="username" class="form-label">Username</label>
            </div>

            <div class="form-floating mb-3 mt-3">
                <input type="email" name="email" class="form-control" id="email" value="<?php echo $email; ?>" placeholder="Enter Email">
                <label for="username" class="form-label">Email</label>
            </div>


            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="pwd" value="<?php echo $password; ?>" placeholder="Enter password" name="password">
                <label for="pwd" class="form-label">Password</label>
            </div>

            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="pwdConf" value="<?php echo $passwordConf; ?>" placeholder="Confirm password" name="passwordConf">
                <label for="pwdConf" class="form-label">Confirm Password</label>
            </div>
            
            <button type="submit" name="login__btn" class="btn btn-secondary">Sign Up</button>

            <p class="text-danger mt-3">Already have an account? <a  class="text-secondary" href="<?php echo BASE_URL . '/login.php' ?>">Sign up</a></p>
        </form>
    </div>
</section>

 