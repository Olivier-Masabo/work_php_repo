<?php
session_start();

// If user not logged in, redirect to login
if (!isset($_SESSION['user_id'])) {
    header("Location: instlogin.php");
    exit();
}

// Handle logout
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("Location: instlogin.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Your existing dashboard head content -->
</head>
<body>
<div class="header">
    <div class="header-content">
        <div class="username"><?php echo htmlspecialchars($_SESSION['username']); ?></div>
        <div class="header-icons">
            <!-- icons -->
            <form method="POST" style="display:inline;">
                <button class="logout-btn" type="submit" name="logout">Logout</button>
            </form>
        </div>
    </div>
</div>

<div class="container">
    <div class="profile-header">
        <div class="profile-pic">
            <div class="profile-pic-inner"></div>
        </div>
        
        <div class="profile-info">
            <div class="profile-actions">
                <div class="profile-username"><?php echo htmlspecialchars($_SESSION['username']); ?></div>
                <button class="btn">Edit profile</button>
                <button class="btn">View archive</button>
            </div>
            
            <div class="stats">
                <div class="stat">
                    <span class="stat-number">0</span>
                    <span class="stat-label"> posts</span>
                </div>
                <div class="stat">
                    <span class="stat-number">0</span>
                    <span class="stat-label"> followers</span>
                </div>
                <div class="stat">
                    <span class="stat-number">0</span>
                    <span class="stat-label"> following</span>
                </div>
            </div>
            
            <div class="profile-bio">
                <div class="bio-name"><?php echo htmlspecialchars($_SESSION['full_name']); ?></div>
                <div class="bio-text">
                    Welcome to your Instagram profile!
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
