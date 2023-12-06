<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="../login.css">
</head>
<body>
    <form action="login.php" method="post">
    <div class="login-container">
        <h1>Login</h1>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" placeholder="Email"><br>
        </div>

        <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" placeholder="Password"><br>
        </div>

        <button type="submit">Login</button>
        
         <div class="signup-link">
            Don't have an account? <a href="signup.php">Sign Up</a>
        </div>

        <div class="Back to Home">
            <a href="../index.php" >
                Back to homepage
            </a>
        </div>
    </form>

    </div>
</body>
</html>
