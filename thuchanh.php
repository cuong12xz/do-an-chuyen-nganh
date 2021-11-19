<?php

    $fullName = $_POST['na'];
    $arrName = explode(" ", $fullName);
    $firstName = $arrName[0]; //Họ chính là phần tử đầu tiên của mảng
    $lastName = $arrName($arrName); //Tên chính là phần tử cuối cùng của mảng
    $middleName = implode(" ", $arrName); //Tên đệm chính là kết nối các phần tử còn lại

    echo 'ho la'.$firstName.'ten la'.$lastName.'con lai'.$middleName;
?>