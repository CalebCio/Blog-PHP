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


<?php
    include(ROOT_PATH . "/app/includes/header.php");
?>

<section  class="bg-white">
    <div class="container-lg bg-light">
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-sm-8 p-3">
                    <h1 class="post__title"><?php echo $post['title']; ?></h1>
                    <br>
                    <?php echo html_entity_decode($post['body']); ?>
                </div>
                
                <div class="col-sm-4 p-5">

                    <h1>Popular posts</h1>
                    <?php foreach($posts as $p): ?>
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                <img src="<?php echo BASE_URL . '/assets/images/' . $p['image']; ?>" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                <div class="card-body">
                                    <p><a class="text-secondary" href="single.php?id=<?php echo $p['id']; ?>" class="title"><?php echo $p['title']; ?></a></p>
                                </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>

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

    <!-- CDN LINK -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>