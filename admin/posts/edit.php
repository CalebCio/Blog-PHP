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
    <title>Admin Section - Edit Post</title>

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

<!-- Left Side Bar Ends -->

<div class="col-sm-9 p-3">
        <div class="d-flex justify-content-around">
            <a href="create.php" class="btn btn-secondary">Add Post</a>
            <a href="index.php" class="btn btn-secondary">Manage Posts</a>
        </div>

        <h2 class="text-center mt-3">Edit Post</h2>
        <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

        <form action="edit.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <div class="mb-3 mt-3">
                <label for="title" class="form-label">Title:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter email"  name="title" value="<?php echo $title; ?>">
            </div>
            <div class="mb-3">
                <label for="body">Body:</label>
                <textarea class="form-control" rows="5" id="body" name="body"><?php echo $body; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Image</label>
                <input class="form-control" name="image" type="file" id="formFile">
            </div>
            <div class="mb-3">
                <label class="form-label">Topic</label>
                <select name="topic_id" class="form-select mt-3">
                    <option></option>

                    <?php foreach ($topics as $key => $topic): ?>
                        <?php if (!empty($topic_id) && $topic_id == $topic['id']): ?>
                            <option selected value="<?php echo $topic['id']; ?>"><?php echo $topic['name']; ?></option>
                        <?php else: ?>
                            <option value="<?php echo $topic['id']; ?>"><?php echo $topic['name']; ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-check mb-3">
                <?php if (empty($published)): ?>
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="published"> Publish
                    </label>
                    <?php else: ?>
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="published" checked> Publish
                    </label>
                <?php endif; ?>
            </div>
            <button type="submit" name="update_post" class="btn btn-primary">Update Post</button>
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