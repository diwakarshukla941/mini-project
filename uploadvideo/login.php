<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style/login.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form method="post" action="">
            <div class="input-container">
                <input type="text" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if ($email === "admin@admin" && $password === "admin") {
        // Redirect to index.php if login is successful
        header("Location: index.php");
        exit();
    } else {
        echo "<script>alert('Invalid User');</script>";
    }
}
