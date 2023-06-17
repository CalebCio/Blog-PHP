<?php include("../path.php"); ?>
<?php include (ROOT_PATH . "/app/controllers/posts.php"); 

adminOnly();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Section - Dashboard</title>

    <!-- CDN LINK -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    

    <title>Vell Magazine</title>

    <!-- Linking Css file  -->
    <link rel="stylesheet" href="../assets/CSS/styles.css">

    <!-- <link rel="stylesheet" href="../assets/CSS/admin.css"> -->

</head>
<body>
    
<!-- 
<?php
    include ROOT_PATH . "/app/includes/adminheader.php";
?> -->



<!-- Left Side Bar Starts-->

<?php
    include ROOT_PATH . "/app/includes/adminSidebar.php";
?>

<!-- Left Side Bar Ends -->

<!-- Admin Content Starts -->

    <div class="col-sm-9 p-3">
        <h2 class="text-center">Dashboard</h2>
        <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
    </div>
  </div>
</div>

</section>

<!-- CDN LINK -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>