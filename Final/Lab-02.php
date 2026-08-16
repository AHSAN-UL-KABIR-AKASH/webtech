<?php

session_start();

if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Store username and email in session
    $_SESSION["username"] = $username;
    $_SESSION["email"] = $email;

    // Create cookie if Remember Me is checked
    if (isset($_POST["remember"])) {

        setcookie(
            "remember_user",
            $username,
            time() + (86400 * 30),
            "/"
        );
    }

    // Go to dashboard
    header("Location: dashboard2.php");
    exit();
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Login Page</title>

    <link rel="stylesheet" href="style2.css">

</head>

<body>

    <div class="login-container">

        <div class="login-box">

            <h1>Welcome Back!</h1>

            <p class="subtitle">
                Login to continue to your dashboard
            </p>

            <form method="POST">

                <label>Username</label>

                <input
                    type="text"
                    name="username"
                    placeholder="Enter your username"
                    required
                >

                <label>Email</label>

                <input
                    type="email"
                    name="email"
                    placeholder="Enter your email"
                    required
                >

                <label>Password</label>

                <input
                    type="password"
                    name="password"
                    placeholder="Enter your password"
                    required
                >

                <div class="remember">

                    <input
                        type="checkbox"
                        name="remember"
                    >

                    <span>Remember Me</span>

                </div>

                <button type="submit" name="login">
                    Login
                </button>

            </form>

            <p class="footer-text">
                Session & Cookie Demo
            </p>

        </div>

    </div>

</body>

</html>