<?php
session_start();

require_once "_includes/database-connection.php";
create_user_table($pdo)
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <?php

    include "_includes/header.php";

    ?>

    <h1>Register</h1>
    <form action="" method="post">
        <label for="username">Username: </label>
        <input type="text" name="username" id="username">

        <label for="password">Password: </label>
        <input type="password" name="password" id="password">

        <button type="submit">Register</button>
    </form>
   <?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $form_username = $_POST["username"];
    $form_hashed_password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $sql_statement = "INSERT INTO `user` (username, password) VALUES ('$form_username', '$form_hashed_password')";

    try {
        $result = $pdo->query($sql_statement);
        if ($result->rowCount() == 1) {
            // if OK redirect to login page
            header("location: login.php");
        }  
    } catch (PDOException $err) {
        echo "There was a problem: " . $err->getMessage(); 
    }
}
   ?>

</body>

</html>