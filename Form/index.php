<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php session_start(); ?>

    <form action="handleForm.php" method="POST">
        <p><input type="text" placeholder="First name here" name="firstName"></p>
        <p><input type="password" placeholder="Password here" name="password"></p>
        <p><input type="submit" value="Login" name="loginBtn"></p>
        <p><input type="submit" value="Logout" name="LogoutBtn"></p>
    </form>

    <?php 
    // Display any login message
    if (isset($_SESSION['message'])) {
        echo '<h2>' . htmlspecialchars($_SESSION['message']) . '</h2>';
        unset($_SESSION['message']); // Clear the message after displaying it
    } else {
        // Display user information only if logged in
        if (isset($_SESSION['firstName'])) { ?>
            <h2>User logged in: <?php echo htmlspecialchars($_SESSION['firstName']); ?></h2>
            <h2>User password: <?php echo htmlspecialchars($_SESSION['password']); ?></h2>
        <?php }
    }
    ?>
</body>
</html>
