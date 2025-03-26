<!DOCTYPE html>
<html>
<head>
    <title>Login & Registration System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <div class="form-box">
            <h2>Login</h2>
            <form action="login.php" method="POST">
                <input type="email" name="email" placeholder="Enter Email" required>
                <input type="password" name="password" placeholder="Enter Password" required>
                <button type="submit">Login</button>
                <p>Don't have an account? <a href="register.php">Register Here</a></p>
            </form>
        </div>
    </div>
</body>
</html>
