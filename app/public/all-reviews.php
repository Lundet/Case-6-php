<?php
session_start();
require_once "_includes/database-connection.php";
include "_includes/global-functions.php";

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
//tar allt från book
$sql =
    // Tar allt från book och tar username från "user"
    "SELECT b.*, u.username 
        FROM `book` b
        INNER JOIN `user` u ON 
        -- länkar ihop user_id i book med idt i user
        b.user_id = u.id";
$result = $pdo->query($sql);
$reviews = $result->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="styles/header.css">
    <title>Alla recensioner</title>
</head>

<body>
    <?php include "_includes/header.php"; ?>

    <h1>Alla recensioner</h1>

    <?php
    foreach ($reviews as $review) {
        echo '<div class="container">
        <h2>' . $review['title'] . '</h2>
        <p>Författare: ' . $review['author'] . '</p>
        <p>Årtal: ' . $review['year_published'] . '</p>
        <p>Recension: ' . $review['review'] . '</p>
        <p>Skapad av: ' . $review['username'] . '</p>           
        <p>Skapad den: ' . date('Y-m-d', strtotime($review['created_at'])) . '</p>
    </div>';
    }
    ?>

    <?php
    include "_includes/footer.php";
    ?>
</body>

</html>