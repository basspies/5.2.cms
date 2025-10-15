<?php include 'includes/header.php';?>

<div class="login">
<div class="login-container">
    <h2>aanmelden</h2>
    <form action="index.php" method="post">
        <label for="username" class="gegevens">Username:</label>
        <input type="text" id="username" name="username" placeholder="Enter your username" required class="gegevens_invoer"><br>
        
        <label for="password" class="gegevens">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required class="gegevens_invoer"><br>

        <button type="submit" class="aanmelden_button">aanmelden</button>
    </form>
    
</div>
</div>

<?php include 'includes/footer.php';?>