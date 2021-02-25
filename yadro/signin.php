<?php

    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = md5($_POST['password']);

    $check_user = OCIParse($c, "SELECT USER_LOGIN, ASSWORD FROM USERS WHERE USER_LOGIN='$login' AND PASSWORD='$password'");
    OCIExecute($check_user, OCI_DEFAULT);
    echo $check_user;
    echo oci_num_rows(check_user);

    if (oci_num_rows($check_user) == 1) {

        $user = oci_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "USER_ID" => $user['id'],
            "USER_NAME" => $user['full_name'],
            "EMAIL" => $user['email']
        ];

        header('Location: ../profile.php');

    } else {
        $_SESSION['message'] = 'Неверный логин или пароль';
        //header('Location: ../index.php');
    }
    OCICommit($c);
    // Отключаемся от бд
    OCILogoff($c);
?>
