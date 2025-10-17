<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>My CMS</title>
</head>
<body>

<header>
    <div class="header-container">

        <img src="img/mirre_logo.png" alt="Site Logo" class="logo">

        <nav>
            <ul class="header-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">Over mij</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </div>
</header>
