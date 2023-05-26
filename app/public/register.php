<?php
session_start();

require_once "_includes/database-connection.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="styles/header.css">
    <title>Registrera</title>
</head>

<body>
    <?php

    include "_includes/header.php";

    ?>

    <h1>Vänligen registrera dig</h1>
    <form action="" method="post">
        <label for="username">Användarnamn: </label>
        <input type="text" name="username" id="username">

        <label for="password">Lösenord: </label>
        <input type="password" name="password" id="password">

        <button class="button" type="submit">Registrera</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $form_username = $_POST["username"];
        $form_hashed_password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        if (strlen($_POST["password"]) < 4) {
            echo "Lösenordet måste vara minst 4 tecken";
            exit();
        }
        if ($form_username === "lasse" || $form_username ==="Lasse"){
            echo "Lasse får inte vara med.";
            exit();
        }
        $sql_statement = "INSERT INTO `user` (`username`, `password`) VALUES ('$form_username', '$form_hashed_password')";

        try {
            $result = $pdo->query($sql_statement);
            if ($result->rowCount() == 1) {
                // if OK redirect to login page
                header("location: login.php");
            }
        } catch (PDOException $err) {
            echo "Användare finns redan";
        }
    }
    ?>

</body>

</html>