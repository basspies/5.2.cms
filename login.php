<?php 
include 'includes/header.php';
include 'includes/connect.php';

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username === '' || $password === '') {
        $error = 'Vul alle velden in.';
    } else {
        // Fetch user
        $stmt = mysqli_prepare($conn, 'SELECT id, password_hash FROM users WHERE username = ? LIMIT 1');
        mysqli_stmt_bind_param($stmt, 's', $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $user_id, $password_hash);
        if (mysqli_stmt_fetch($stmt)) {
            mysqli_stmt_close($stmt);
            if (password_verify($password, $password_hash)) {
                // login success
                $_SESSION['user_id'] = $user_id;
                $_SESSION['username'] = $username;
                header('Location: index.php');
                exit;
            } else {
                $error = 'Onjuiste gebruikersnaam of wachtwoord.';
            }
        } else {
            mysqli_stmt_close($stmt);
            $error = 'Onjuiste gebruikersnaam of wachtwoord.';
        }
    }
}
?>
<div class="login">
<div class="login-container">
    <h2>Login</h2>
    <?php if ($error): ?>
        <p class="error"><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>
    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Enter your username" required><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required><br>
        
        <button type="submit">Login</button>
    </form>
    
    <div class="aanmelden">
        <p>heb je geen account? <a href="aanmelden.php">Registreer hier</a></p>
        </div>
</div>
</div>
<?php include 'includes/footer.php';?>