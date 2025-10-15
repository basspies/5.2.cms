<?php include 'includes/header.php';?>
<div class="login">
<div class="login-container">
    <h2>Login</h2>
    <form action="index.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Enter your username" required><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required><br>
        
        <button type="submit">Login</button>
    </form>
    
    <div class="aanmelden">
        <p>Don't have an account? <a href="aanmelden.php">Register here</a></p>
        </div>
</div>
</div>
<?php include 'includes/footer.php';?>