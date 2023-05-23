<header>
    Header...
</header>

<nav>
    <!-- Om användare inte är inloggad -->
    <?php if (!isset($_SESSION['username'])) : ?>
        <a href="index.php">Start</a> | <a href="login.php">Logga in</a> | <a href="register.php">Registrera</a>
        
    <!-- Om användare är inloggad -->
    <?php else : ?>
        <a href="review.php">Recension</a> | <a href="my-reviews.php">Mina recensioner</a> | <a href="logout.php">Logga ut</a>
    <?php endif; ?>

    <!-- Om användarenamn finns, skriv ut -->
    <?php if (isset($_SESSION['username'])) : ?>
        <p>Inloggad som <?= $_SESSION['username'] ?></p>
    <?php endif; ?>
</nav>
<hr>