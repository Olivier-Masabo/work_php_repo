
<?php
    require "Connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <h2>Create account</h2>
        <label>Name</label>
        <input type="text" name="name"><br>
        <label>Username</label>
        
        <input type="text" name="username"><br>
        <label>Password</label>
        <input type="password" name="password"><br>
        <button name="button">SignUp</button>
        
    </form>

    <?php

        if(isset($_POST['button'])){
            $name = $_POST['name'];
            $username = $_POST["username"];
            $password = $_POST["password"];

            $query = "insert into `employee`(`name`, `username`,`password`) values ('$name','$username','$password')";

            if(mysqli_query($conn, $query)) {
                header("location: Display.php");
            }
            else{
                echo "fail";
            }

        }

    ?>
</body>
</html>