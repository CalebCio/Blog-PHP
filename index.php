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

    <title>Vell Magazine</title>

</head>
<body>


<?php
    include(ROOT_PATH . "/app/includes/header.php");
    include(ROOT_PATH . "/app/includes/messages.php");

?>

<section>
    <div class="container-lg">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="<?php echo BASE_URL . '/assets/images/d3.png' ?>" class="d-block w-100" style="width:100%; height:500px" alt="...">
                <div class="carousel-caption">
                    <h5 class="fw-bold text-light">Fun Facts About White-Tailed Deer</h5>
                    <a class="btn btn-secondary fw-bold text-light" href="single.php?id=14">Read More</a><br>
                    <p class="card-text"><small class="text-light"><i class="bi bi-person-fill"></i>Cio</small></p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="<?php echo BASE_URL . '/assets/images/d2.png' ?>" class="d-block w-100" style="width:100%; height:500px" alt="...">
                <div class="carousel-caption">
                    <h5 class="fw-bold text-light">First Flowers Of Spring</h5>
                    <a class="btn btn-secondary" href="single.php?id=13">Read More</a><br>
                    <p class="card-text"><small class="text-light"><i class="bi bi-person-fill"></i>Cio</small></p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="<?php echo BASE_URL . '/assets/images/D1.png' ?>" class="d-block w-100" style="width:100%; height:500px" alt="...">
                <div class="carousel-caption">
                <h5 class="fw-bold text-light">The Oldest Rocks on Earth</h5>
                    <a class="btn btn-secondary" href="single.php?id=12">Read More</a><br>
                    <p class="card-text"><small class="text-light"><i class="bi bi-person-fill text-light"></i>Cio</small></p>
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<!-- <section>
    <div class="container-lg">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php foreach ($posts as $post): ?>
                    <div class="carousel-item active" data-bs-interval="5000">
                        <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" class="d-block w-100" style="width:100%; height:450px" alt="...">
                        <div>
                            <h5 class="card-title"><a class="text-dark" href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h5>
                            <small class="text-body-secondary"><i class="bi bi-person-fill"></i><?php echo $post['username']; ?> <br> <i class="bi bi-calendar-fill"></i> <?php echo date('F j, Y', strtotime($post['created_at'])); ?></small>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section> -->


<section  class="bg-white">
    <div class="container-lg bg-light">
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-sm-8 p-3">
                    <h1><?php echo $postsTitle; ?></h1>
                    <?php foreach ($posts as $post): ?>
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $post['title']; ?></h5>
                                    <p class="card-text"><?php echo html_entity_decode(substr($post['body'], 0, 200) . '...'); ?></p>
                                    <a class="btn btn-secondary float-end" href="single.php?id=<?php echo $post['id']; ?>">Read More</a>
                                    <p class="card-text"><small class="text-body-secondary"><i class="bi bi-person-fill"></i><?php echo $post['username']; ?> <br> <i class="bi bi-calendar-fill"></i> <?php echo date('F j, Y', strtotime($post['created_at'])); ?></small></p>
                                </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                
                <div class="col-sm-4 p-5">
                    <h2>Search</h2>
                    <form action="index.php" method="post">
                        <input type="text" name="search__term" class="form-control" placeholder="Search...">
                    </form>
                


                    <div class="mt-5">
                        <h2>Topics</h2>

                        <ul class="list-group list-group-flush">
                            <?php foreach ($topics as $key => $topic): ?>
                                <li class="list-group-item mb-3 p-2"><a class="text-secondary" href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name']; ?>"><?php echo $topic['name']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<?php
    include(ROOT_PATH . "/app/includes/footer.php");
?>   


    <!-- JQwery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Slick Carousel -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Js Files-->
    <script src="assets/js/script.js"></script>



    <!-- CDN LINK -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>



</body>
</html>