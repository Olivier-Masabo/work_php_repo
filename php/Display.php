<?php
require "Connection.php";
require "Logout.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Username</th>
            <th>Action</th>
        </tr>
        
        <?php

            $query = mysqli_query($conn,"select * from employee");

            while($row= mysqli_fetch_array($query)){

                echo "
                    <tr>
                        <td>".$row["name"]."</td>
                        <td>".$row['username']."</td>
                        <td>
                            <a href='Update.php?update_id=".$row["id"]."'>Update</a>
                            <a href='Delete.php?delete_id=".$row["id"]."'>delete</a>
                        </td>
                    </tr>
                ";

            }


        ?>
    </table>
    
</body>
</html>