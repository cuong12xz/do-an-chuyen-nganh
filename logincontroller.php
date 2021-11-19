<?php

if (count($_POST) > 0) {
    $username = $_POST["username"];
    $passwd = $_POST["passwd"];

    if ($username == "admin@gmail.com" && $passwd == "1" && isset($username)) {
        session_start();
        $_SESSION['tk'] = $username;
        header("Location: index.php");
        
    } else {
        header("Location: login.php");       
    }
}
?>

