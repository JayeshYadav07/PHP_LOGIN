<?php
include_once("./config/db.php");

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

if(isset($_POST['submit']))
{
    extract($_POST);
    if(empty($username)){
        echo "username not empty <br>";
    }
    else if(empty($password)){
        echo "password not empty <br>";
    }
    else{
        $sql = "INSERT INTO user (username,password)
        VALUES ('$username','$password')";

        if ($conn->query($sql) === TRUE) {
            echo "user created successfully <br>";
        } else {
            echo "Error adding user: " . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Signup Account</h1>
    <form action="signup.php" method="post">
        <div>
            <label for="username">Username :</label>
            <input type="text" name="username">
        </div>
        <br>
        <div>
            <label for="password">Password :</label>
            <input type="text" name="password">
        </div>
        <br>
        <button type="submit" name="submit">submit</button>
    </form>
    <a href="index.php">login account</a>
</body>
</html>