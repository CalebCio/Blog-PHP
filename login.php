<?php include "path.php"?>
<?php include (ROOT_PATH . "/app/controllers/users.php"); 

guestsOnly();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <!-- Linking Css file  -->
    <link rel="stylesheet" href="assets/CSS/styles.css">

    <!-- Google Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- UNICON STYLES -->

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>
<body>

<?php
    include(ROOT_PATH . "/app/includes/header.php");
?>

<div class="auth__content">

    <form action="login.php" method="post">
        <h2 class="form__title">Login</h2>

        <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

        <div>
            <label>Username</label>
            <input type="text" name="username" value="<?php echo $username; ?>" class="text__input">
        </div>

        <div>
            <label>Password</label>
            <input type="password" name="password" value="<?php echo $password; ?>" class="text__input">
        </div>

        <div>
            <button type="submit" name="login__btn" class="btn btn__big">Login</button>
        </div>

        <p class="signup">Don't have an account? <a href="<?php echo BASE_URL . '/signup.php' ?>">Sign Up</a></p>
    </form>


</div>