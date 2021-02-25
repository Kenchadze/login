<?php

    session_start();
    include "connect.php";
    $login = $_POST['login'];
    $password = md5($_POST['password']);
    include "select_user.php";
    if (oci_num_rows($check_user)==1) {
        $_SESSION['user'] = [
            "id" => $row['USER_ID'],
            "full-name" => $row['USER_NAME'],
            "email" => $row['EMAIL']
        ];
       header('Location: ../profile.php');

    } 
   else {
        $_SESSION['message'] = 'Неверный логин или пароль';
        header('Location: ../index.php');
  }
    OCICommit($c);
    // Отключаемся от бд
    OCILogoff($c);
?>
