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
        $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";

        // print_r($conn->query($sql));
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "user login successfully <br>";
            $_SESSION["is_login"] = true;
            header("Location: user.php");
        } else {
            echo "Wrong credential! <br>";
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
    <h1>Login Account</h1>
    <form action="index.php" method="post">
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
    <a href="signup.php">create account</a>
</body>
</html>