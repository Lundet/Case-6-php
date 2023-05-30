<header>
    <!-- If the username is available, display it -->
    <?php if (isset($_SESSION['username'])): ?>
        <p>Inloggad som
            <?= $_SESSION['username'] ?>
        </p>
    <?php endif; ?>
    <nav>
        <!-- Om användare inte är inloggad -->
        <?php if (!isset($_SESSION['username'])): ?>
            <a href="index.php">Start</a>  <a href="login.php">Logga in</a>  <a href="register.php">Registrera</a>

            <!-- Om användarenamn finns, skriv ut -->
        <?php else: ?>
            <a href="my-reviews.php">Mina recensioner</a>  <a href="all-reviews.php">Alla Recensioner</a>  <a
                href="logout.php">Logga ut</a>
        <?php endif; ?>
    </nav>


</header>

<hr>