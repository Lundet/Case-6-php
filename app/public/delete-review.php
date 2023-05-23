<?php
session_start();

require_once "_includes/database-connection.php";


    $reviewId = $_GET['review_id'];
    $userId = $_SESSION['user_id'];

    $sql = "DELETE FROM `book` WHERE `book_id` = $reviewId AND `user_id` = $userId";
    $result = $pdo->exec($sql);
    
    header("Location: my-reviews.php");
    exit();
?>