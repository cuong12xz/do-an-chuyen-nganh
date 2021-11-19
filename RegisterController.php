<?php

$bnt_XuLy = $_POST["bnt_XuLy"];
switch ($bnt_XuLy) {
    case "login":
        header("Location: login.php");
        die;
        break;
    case "register":
        header("Location: index.php");
        die;
        break;
}
?>

