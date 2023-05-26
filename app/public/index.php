<?php


declare(strict_types=1);
session_start();
include "_includes/global-functions.php";
include "_includes/database-connection.php";
$title = "En webbsida med PHP";
create_user_table($pdo);
create_book_table($pdo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
      
</head>
<body>


    <h1><?php echo "Bokrecension"; ?></h1>

    <a href="login.php">Kom igång</a>

</body>
</html>