<?php
require_once 'includes/connect.php';

// Helper redirect with message
function redirect_with_message($url, $msg) {
    header('Location: ' . $url . '?msg=' . urlencode($msg));
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username === '' || $password === '') {
        redirect_with_message('aanmelden.php', 'Vul alle velden in.');
    }

    // Check if username already exists (use `login` table)
    $stmt = mysqli_prepare($conn, 'SELECT id FROM users WHERE username = ? LIMIT 1');
    mysqli_stmt_bind_param($stmt, 's', $username);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    if (mysqli_stmt_num_rows($stmt) > 0) {
        mysqli_stmt_close($stmt);
        redirect_with_message('aanmelden.php', 'Gebruikersnaam bestaat al. Kies een andere.');
    }
    mysqli_stmt_close($stmt);

    // Hash password and insert into `users` table
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $insert = mysqli_prepare($conn, 'INSERT INTO users (username, password) VALUES (?, ?)');
    mysqli_stmt_bind_param($insert, 'ss', $username, $hash);
    if (mysqli_stmt_execute($insert)) {
        mysqli_stmt_close($insert);
        redirect_with_message('login.php', 'Registratie gelukt. Log in.');
    } else {
        mysqli_stmt_close($insert);
        redirect_with_message('aanmelden.php', 'Er ging iets mis bij registreren.');
    }

} else {
    header('Location: aanmelden.php');
    exit;
}
