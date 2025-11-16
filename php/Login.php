<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method ="POST">
        <label>Username</label>
        <input type="text" name="username"><br>
        <label>Password</label>
        <input type="password" name="password"><br>
        <input type="checkbox" name="remember">Remember me <br>
        <button name="submit">submit</button>
        <a href="SignUp.php">Sign Up</a>
    </form>
    <?php
    require "connection.php";
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $remember = $_POST['remember'];
        if($remember == "on"){
            echo "yes";     
            setcookie("username",$username,time() +600);
        }
        $query = "select * from employee where username='$username' and password='$password'";
        $res = mysqli_query($conn,$query);
        $output  = mysqli_fetch_array($res);
        if($output){
            session_start();
            $_SESSION['name'] = $output['name'];
            header("location:Display.php");
        }
        else echo "not found";
    }

    ?>

</body>
</html>
