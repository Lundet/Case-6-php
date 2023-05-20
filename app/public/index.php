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
    <title><?php echo $title; ?></title>
</head>
<body>


    <h1><?php echo "Hello world"; ?></h1>

    <a href="template.php">Template</a> - en mallfil som kan användas för olika sidor i projektet.

</body>
</html>