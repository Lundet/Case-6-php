<?php
session_start();

include "_includes/database-connection.php";
include "_includes/global-functions.php";

if (isset($_GET['review_id'])) {
    $review_id = $_GET['review_id'];
    $sql = "SELECT * FROM `book` WHERE `book_id` = $review_id";
    $result = $pdo->query($sql);
    $review = $result->fetch();

}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    //ta de updaterade infon
    $updated_title = $_POST['title'];
    $updated_author = $_POST['author'];
    $updated_year_published = $_POST['year_published'];
    $updated_review = $_POST['review'];

    //uppdatera i databasen
    $sql = "UPDATE `book` SET `title` = '$updated_title', `author` = '$updated_author', `year_published` = '$updated_year_published', `review` = '$updated_review' WHERE `book_id` = $review_id";
    $pdo->exec($sql);

    // Gå tillbaka till sina recensioner
    header("location: my-reviews.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redigera recension</title>
    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="styles/header.css">
</head>

<body>
    <?php include "_includes/header.php"; ?>

    <h1>Redigera recension</h1>

    <form action="" method="post">
        <input type="hidden" name="review_id" value="<?php echo $review['book_id']; ?>">
        <label for="title">Titel</label>
        <input type="text" name="title" id="title" value="<?php echo $review['title']; ?>">

        <label for="author">Författare</label>
        <input type="text" name="author" id="author" value="<?php echo $review['author']; ?>">

        <label for="year_published">Årtal</label>
        <input type="text" name="year_published" id="year_published" value="<?php echo $review['year_published']; ?>">

        <label for="review">Recension</label>
        <textarea name="review" id="review" rows="5" cols="35"><?php echo $review['review']; ?></textarea>

        <button class="button" type="submit">Uppdatera</button>
    </form>


    <?php
    include "_includes/footer.php";
    ?>
</body>

</html>