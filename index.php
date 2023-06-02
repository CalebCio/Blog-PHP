<?php 

    include("path.php"); 
    include (ROOT_PATH . "/app/controllers/topics.php"); 

    $posts = array();
    $postsTitle = 'Recent Posts';

    if (isset($_GET['t_id'])) {
        $posts = getPostsByTopicId($_GET['t_id']);
        $postsTitle = "You searched for posts under '" . $_GET['name'] . "'";
    }elseif (isset($_POST['search__term'])) {
        $postsTitle = "You searched for '" . $_POST['search__term'] . "'";
        $posts = searchPosts($_POST['search__term']);
    }else {
        $posts = getPublishedPosts();
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vell Magazine</title>

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
    include(ROOT_PATH . "/app/includes/messages.php");

?>




    <div class="page__wrapper">

        <!-- Post Slider Starts -->

            <div class="post__slider">
                <h1 class="slider__title">Trending Posts</h1>

                <i class="fas fa-chevron-left prev"></i>
                <i class="fas fa-chevron-right next"></i>

                <div class="post__wrapper">

                    <?php foreach ($posts as $post): ?>

                        <div class="post">
                            <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="slider__image">
                            <div class="post__info">
                                <h4><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h4>
                                <i class="far fa-user"><span><?php echo $post['username']; ?></span></i>
                                &nbsp; <br>
                                <i class="far fa-calendar"><span><?php echo date('F j, Y', strtotime($post['created_at'])); ?></span></i>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>

        <!-- Post Slider Ends -->



        <!-- Content Starts-->

            <div class="content clerfix">

                <!-- Main Content Starts -->

                <div class="main__content">
                    <h1 class="recentPost__title"><?php echo $postsTitle; ?></h1>

                    <?php foreach ($posts as $post): ?>

                        <div class="post">
                            <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="post__image">
                            <div class="post__preview">
                                <h1><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h1>
                                <i class="far fa-user"><span><?php echo $post['username']; ?></span></i>
                                &nbsp;
                                <i class="far fa-calendar"><span><?php echo date('F j, Y', strtotime($post['created_at'])); ?></span></i>
                                <p class="preview__text">
                                    <?php echo html_entity_decode(substr($post['body'], 0, 200) . '...'); ?>
                                </p>

                                <a href="single.php?id=<?php echo $post['id']; ?>" class="btn read__more">Read More</a>
                            </div>
                        </div>

                    <?php endforeach; ?>

                </div>


                <!-- Main Content Ends -->


                <div class="sidebar">
                    <div class="section search">
                        <h2 class="section__title">Search</h2>
                        <form action="index.php" method="post">
                            <input type="text" name="search__term" class="text__input" placeholder="Search...">
                        </form>
                    </div>


                    <div class="section topics">
                        <h2 class="section__title">Topics</h2>

                        <ul>

                            <?php foreach ($topics as $key => $topic): ?>

                                <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name']; ?>"><?php echo $topic['name']; ?></a></li>
                        
                            <?php endforeach; ?>
                            
                        </ul>
                    </div>
                </div>
            </div>

        <!-- Content Ends-->
    </div>


<?php
    include(ROOT_PATH . "/app/includes/footer.php");
?>   


    <!-- JQwery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Slick Carousel -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Js Files-->
    <script src="assets/js/script.js"></script>




</body>
</html>