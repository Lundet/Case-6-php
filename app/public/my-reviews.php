<?php

session_start();
include "_includes/global-functions.php";
require_once "_includes/database-connection.php";
create_user_table($pdo);
create_book_table($pdo);

// Rest of the code...
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="styles/header.css">
    <title>Mina recensioner</title>
</head>

<body>

    <?php
    // tar user id från sessionen och tar allt från book som är skapad av user idt.
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM `book` WHERE `user_id` = $user_id";
    $result = $pdo->query($sql);
    $reviews = $result->fetchAll();
    ?>

    <?php
    include "_includes/header.php";
    ?>

    <h1>Mina recensioner</h1>


    <?php foreach ($reviews as $review) { ?>
        <div class="container">
            <h2><?= $review['title'] ?></h2>
            <p>Författare: <?= $review['author'] ?></p>
            <p>Årtal: <?= $review['year_published'] ?></p>           
            <p>Skapad den: <?= $review['created_at'] ?></p>
            <p>Recension: <?= $review['review'] ?></p>
            <a href="edit-review.php"><button class="edit-button">Edit</button></a>
            <a href="delete-review.php"><button class="delete-button">Delete</button></a>
        </div>
        

    <?php
    }
    ?>




    <?php
    include "_includes/footer.php";

    ?>


</body>

</html>