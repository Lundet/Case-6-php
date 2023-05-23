<?php

declare(strict_types=1);

session_start();

include "_includes/database-connection.php";
include "_includes/global-functions.php";

$username = $_SESSION['username'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="styles/global.css">
</head>

<body>

    <?php
    include "_includes/header.php";
    ?>


    <h1>Lägg till en recension</h1>
    <form action="" method="post">
        <label for="title">Titel</label>
        <input type="text" name="title" id="title">

        <label for="author">Författare </label>
        <input type="text" name="author" id="author">

        <label for="year_published">Årtal</label>
        <input type="text" name="year_published" id="year_published">

        
        <label for="review">Recesion</label>
        <input type="text" name="review" id="review">

        <label for="created_at">Skapad den</label>
        <input type="text" name="created_at" id="created_at">


        <button type="submit">Skicka in</button>
    </form>
    <?php

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $form_title = $_POST['title'];
        $form_author = $_POST['author'];
        $form_year_published = $_POST['year_published'];
        $form_review = $_POST['review'];
        $user_id = $_SESSION['user_id'];
        $sql = "INSERT INTO `book`(`title`, `author`, `year_published`, `review`, `created_at`, `user_id`) VALUES ('$form_title','$form_author','$form_year_published','$form_review',NOW(),'$user_id')";
        $result = $pdo->query($sql);
    }
    ?>







    <?php
    include "_includes/footer.php";
    ?>

</body>

</html>