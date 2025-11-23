<?php
session_start();

// Redirect logged-in users to dashboard
if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}

$error = '';
if (isset($_POST['login'])) {
    $usernameOrContact = $_POST['username'];
    $password = $_POST['password'];

    $connection = mysqli_connect('localhost','root','','instagramdata');
    if (!$connection) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    // Fetch user by username or contact (email/phone)
    $stmt = $connection->prepare("SELECT * FROM users WHERE username=? OR contact=? LIMIT 1");
    $stmt->bind_param("ss", $usernameOrContact, $usernameOrContact);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            // Login successful, set session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['full_name'] = $user['full_name'];

            header("Location: dashboard.php");
            exit();
        } else {
            $error = "❌ Incorrect password!";
        }
    } else {
        $error = "❌ User not found!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Your existing head content -->
</head>
<body>
<div class="container">
    <div class="box">
        <div class="logo">Instagram</div>
        <?php if($error) echo "<p style='color:red; text-align:center;'>$error</p>"; ?>
        <form method="POST" action="" style="width: 100%;">
            <input type="text" name="username" placeholder="Phone number, username, or email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" class="btn" name="login">Log in</button>
        </form>
        <div class="divider"><span>OR</span></div>
        <a href="facebook-login.php" class="fb-login">
            <span class="fb-icon"></span>
            Log in with Facebook
        </a>
        <a href="forgot-password.php" class="forgot-password">Forgot password?</a>
    </div>
    <div class="signup-box">
        Don't have an account? <a href="instsignup.php">Sign up</a>
    </div>
    <div class="get-app">Get the app.</div>
</div>
</body>
</html>
