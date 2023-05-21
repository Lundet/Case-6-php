<header>
    Header...
</header>

<nav>
    <a href="start.php">Start</a>
    <?php if (!isset($_SESSION['username'])) : ?>
        | <a href="login.php">Logga in</a> | <a href="register.php">Registrera</a>
    <?php else : ?>
        | <a href="review.php">Recension</a> <a href="logout.php">Logga ut</a>
    <?php endif; ?>
    <p>Inloggad som <?= $_SESSION['username'] ?></p>
</nav>
<hr>
