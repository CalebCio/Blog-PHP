<?php include("../../path.php"); ?>
<?php include (ROOT_PATH . "/app/controllers/topics.php"); 

adminOnly();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Section - Manage Topics</title>

    <!-- CDN LINK -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="icon" href="<?php echo BASE_URL . '/assets/images/vellfavicon.png'; ?>">

    <!-- ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    

    <!-- Linking Css file  -->
    <link rel="stylesheet" href="../../assets/CSS/styles.css">

    <link rel="stylesheet" href="../../assets/CSS/admin.css">

    
</head>
<body>
    
<!-- <?php
    include ROOT_PATH . "/app/includes/adminheader.php";
?> -->


<!-- Left Side Bar Starts-->

<?php
    include ROOT_PATH . "/app/includes/adminSidebar.php";
?>

<!-- Left Side Bar Ends -->

<div class="col-sm-9 p-3">
        <div class="d-flex justify-content-around">
            <a href="create.php" class="btn btn-secondary">Add Topic</a>
            <a href="index.php" class="btn btn-secondary">Manage Topics</a>
        </div>

        <h2 class="text-center mt-3">Manage Topics</h2>
        <?php
            include ROOT_PATH . "/app/includes/messages.php";
        ?>

        <table class="table caption-top">
            <caption>List of Topics</caption>
            <thead>
                <tr>
                <th scope="col">Sn</th>
                <th scope="col">Name</th>
                <!-- <th scope="col">Author</th> -->
                <th scope="col">Actions</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($topics as $key => $topic): ?>

                    <tr>
                        <td><?php echo $key + 1; ?></td>
                        <td><?php echo $topic['name']; ?></td>
                        <td><a href="edit.php?id=<?php echo $topic['id']; ?>" class="edit">edit</a></td>
                        <td><a href="index.php?del_id=<?php echo $topic['id']; ?>" class="delete">delete</a></td>
                    </tr>
                    
                <?php endforeach; ?>
            </tbody>
        </table>


    </div>
  </div>
</div>

</section>

<!-- CDN LINK -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>