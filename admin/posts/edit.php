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
            <a href="index.php" class="btn">Manage Post</a>
        </div>


        <div class="content">

        <h2 class="page__title">Edit Post</h2>
        <?php
            include ROOT_PATH . "/app/helpers/formErrors.php";
        ?>

        <form action="edit.php" method="post" enctype="multipart/form-data">

        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <div>
                <label>Title</label>
                <input type="text" name="title" value="<?php echo $title; ?>" class="text__input">
            </div>

            <div>
                <label>Body</label>
                <textarea name="body" id="body"><?php echo $body; ?></textarea>
            </div>

            <div>
                <label>Image</label>
                <input type="file" name="image" class="text__input">
            </div>

            <div>
                <label>Topic</label>
                <select name="topic_id" class="text__input">

                    <option value=""></option>

                    <?php foreach ($topics as $key => $topic): ?>

                        <?php if (!empty($topic_id) && $topic_id == $topic['id']): ?>
                            <option selected value="<?php echo $topic['id']; ?>"><?php echo $topic['name']; ?></option>
                        <?php else: ?>
                            <option value="<?php echo $topic['id']; ?>"><?php echo $topic['name']; ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>

                </select>
            </div>

            <div>

                <?php if (empty($published) && $published == 0): ?>
                    <label>
                        <input type="checkbox" name="published">
                        Publish
                    </label>
                <?php else: ?>
                    <label>
                        <input type="checkbox" name="published" checked>
                        Publish
                    </label>
                <?php endif; ?>
            </div>

            <div>
                <button type="submit"  name="update_post" class="btn">Update Post</button>
            </div>
        </form>

        </div>


    </div>

<!-- Admin Content Ends -->

</div>


    

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