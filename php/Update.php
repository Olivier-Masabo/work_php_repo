
<?php
    require "Connection.php";
    require "Logout.php";
    $id = $_GET['update_id'];
    $result = mysqli_query($conn, "select * from employee where id = $id");
    $values = mysqli_fetch_array($result);
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
        <h2>Update account</h2>
        <input type="text" name="name" value="<?php echo $values['name'] ?>">
        <input type="text" name="username" value="<?php echo $values['username'] ?>">
        <input type="password" name="password" value="<?php echo $values['password'] ?>">
        <button name="button">Update</button>
    </form>

    <?php

        if(isset($_POST['button'])){
            
            $name = $_POST['name'];
            $username = $_POST["username"];
            $password = $_POST["password"];

            $query = "update employee set name='$name',username='$username',password='$password' where id=$id";

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


