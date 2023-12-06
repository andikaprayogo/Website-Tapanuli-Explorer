<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <link rel="stylesheet" type="text/css" href="../signup.css">
</head>
<body class="signup-page">
    <form action="signup-check.php" method="post">
    <div class="signup-container">
        <h1>Sign Up</h1>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

        <div class="form-group">
        <label>Name</label>
        <?php if (isset($_GET['name'])) { ?>
            <input type="text" 
                   name="name" 
                   placeholder="Name"
                   value="<?php echo $_GET['name']; ?>"><br>
        <?php } else { ?>
            <input type="text" 
                   name="name" 
                   placeholder="Name"><br>
        <?php } ?>

        <label>Email</label>
        <?php if (isset($_GET['email'])) { ?>
            <input type="text" 
                   name="email" 
                   placeholder="Email"
                   value="<?php echo $_GET['email']; ?>"><br>
        <?php } else { ?>
            <input type="text" 
                   name="email" 
                   placeholder="Email"><br>
        <?php } ?>

        <label>Password</label>
        <input type="password" 
               name="password" 
               placeholder="Password"><br>

        <label>Retype Password</label>
        <input type="password" 
               name="re_password" 
               placeholder="Retype Password"><br>

        <button type="submit">Sign Up</button>

        <div class="login-link">
            Already have an account? <a href="index.php">Login</a>
        </div>
        
        </div>
    </form>

   
</body>
</html>
