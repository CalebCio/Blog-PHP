<?php include("../../path.php"); ?>
<?php include (ROOT_PATH . "/app/controllers/posts.php"); 

adminOnly();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Section - Manage Posts</title>

    <!-- Linking Css file  -->
    <link rel="stylesheet" href="../../assets/CSS/styles.css">

    <link rel="stylesheet" href="../../assets/CSS/admin.css">

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
    include ROOT_PATH . "/app/includes/adminheader.php";
?>


<!-- Admin Page Wrapper -->


<div class="admin__wrapper">

<!-- Left Side Bar Starts-->

<?php
    include ROOT_PATH . "/app/includes/adminSidebar.php";
?>

<!-- Left Side Bar Ends -->

<!-- Admin Content Starts -->

    <div class="admin__content">
        <div class="botton__group">
            <a href="create.php" class="btn">Add Post</a>
            <a href="index.php" class="btn">Manage Posts</a>
        </div>


        <div class="content">

        <h2 class="page__title">Manage Posts</h2>

        <?php
            include ROOT_PATH . "/app/includes/messages.php";
        ?>

        <table>
            <thead>
                <th>SN</th>
                <th>Title</th>
                <th>Author</th>
                <th colspan="3">Action</th>
            </thead>

            <tbody>


                <?php foreach ($posts as $key => $post): ?>
                    <tr>
                        <td><?php echo $key + 1; ?></td>
                        <td><?php echo $post['title']; ?></td>
                        <td>Vell</td>
                        <td><a href="edit.php?id=<?php echo $post['id']; ?>" class="edit">edit</a></td>
                        <td><a href="edit.php?delete_id=<?php echo $post['id']; ?>" class="delete">delete</a></td>

                        <?php if ($post['published']): ?>
                            <td><a href="edit.php?published=0&p_id=<?php echo $post['id']; ?>" class="unpublish">unpublish</a></td>
                        <?php else: ?>
                            <td><a href="edit.php?published=1&p_id=<?php echo $post['id']; ?>" class="publish">publish</a></td>
                        <?php endif; ?>
                        
                    </tr>
                <?php endforeach; ?>


                
            </tbody>
        </table>

        </div>


    </div>

<!-- Admin Content Ends -->

</div>


    
    

    <!-- JQwery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Js Files-->
    <script src="../../js/script.js"></script>



</body>
</html>