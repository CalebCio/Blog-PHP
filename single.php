<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php"); 


if (isset($_GET['id'])) {
    $post = selectOne('posts', ['id' => $_GET['id']]); 
}

$topics = selectAll('topics');

$posts = selectAll('posts', ['published' => 1]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $post['title']; ?> | Vell Magazine</title>

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




    <div class="page__wrapper">


        <!-- Content Starts-->

            <div class="content clearfix">

                <!-- Main Content Starts -->

                <div class="main__content single">
                    <h1 class="post__title"><?php echo $post['title']; ?></h1>

                    <div class="post__content">
                        <?php echo html_entity_decode($post['body']); ?>
                    </div>
                </div>


                <!-- Main Content Ends -->



                <!-- sidebar Starts -->

                <div class="sidebar single">
                    
                    <div class="section popular">
                        <h2 class="section__title">Popular posts</h2>

                        <?php foreach($posts as $p): ?>
                            <div class="post clearfix" >
                                <img src="<?php echo BASE_URL . '/assets/images/' . $p['image']; ?>" alt="">
                                <a href="" class="title"><h4><?php echo $p['title']; ?></h4></a>
                            </div>
                        <?php endforeach; ?>

                    </div>
                    

                    <div class="section topics">
                        <h2 class="section__title">Topics</h2>
                        <ul>

                            <?php foreach($topics as $topic): ?>
                                <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name']; ?>"><?php echo $topic['name']; ?></a></li>
                            <?php endforeach; ?>
                            
                        </ul>
                    </div>
                </div>

                <!-- sidebar ends -->
            </div>

        <!-- Content Ends-->
    </div>


<?php
    include(ROOT_PATH . "/app/includes/footer.php");
?>   

    <!-- JQwery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Js Files-->
    <script src="js/script.js"></script>


</body>
</html>