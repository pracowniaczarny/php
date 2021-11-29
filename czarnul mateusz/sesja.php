<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
        $CON = mysqli_connect('localhost','root','admin') or die ("Disconected");
        $result = mysqli_query($con,"SELECT * FROM login_user WHERE user_name='" . $_POST["user name"] . "'and pass =
        $row = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['name'];
        } else {
            $message = "invalid username or password!";
        }
    }
    if(isset($_SESSION["ID"])) {
        header("Location:index.php";
    }
php?>