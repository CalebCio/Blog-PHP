<?php include("../../path.php"); ?>
<?php include (ROOT_PATH . "/app/controllers/users.php"); 

adminOnly();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Section - Add Users</title>

    <!-- CDN LINK -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    

    <!-- Linking Css file  -->
    <link rel="stylesheet" href="../../assets/CSS/styles.css">

    <link rel="stylesheet" href="../../assets/CSS/admin.css">


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

<div class="col-sm-9 p-3">
         <div class="d-flex justify-content-around">
            <a href="create.php" class="btn btn-secondary">Add User</a>
            <a href="index.php" class="btn btn-secondary">Manage Users</a>
        </div>

        <h2 class="text-center mt-3">Add User</h2>
        <?php
            include ROOT_PATH . "/app/includes/messages.php";
        ?>

        <form action="create.php" method="post">
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Username:</label>
                <input type="text" class="form-control" value="<?php echo $username; ?>" id="username" placeholder="Enter username" name="username">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" value="<?php echo $email; ?>" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" id="password" value="<?php echo $password; ?>" placeholder="Enter password" name="password">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password Confirmation:</label>
                <input type="password" class="form-control" id="password" value="<?php echo $passwordConf; ?>" placeholder="Enter password" name="passwordConf">
            </div>

            <div class="form-check mb-3">
                <?php if(isset($admin) && $admin == 1): ?>
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="admin" checked> Admin
                </label>
                <?php else: ?>
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="admin"> Admin
                </label>
                <?php endif; ?>
            </div>
            <button type="submit" name="create_admin" class="btn btn-secondary">Add User</button>
        </form>
    </div>
  </div>
</div>

</section>

    <!-- CDN LINK -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <!-- JQwery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- CkEditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>

    <script>
        
        ClassicEditor
        .create( document.querySelector( '#body' ), {
            toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
            heading: {
                options: [
                    { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                    { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                    { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
                ]
            }
        } )
        .catch( error => {
            console.log( error );
        } );

    </script>


    <!-- Js Files-->
    <script src="../../js/script.js"></script>



</body>
</html>