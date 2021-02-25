<?php

    session_start();
    include "connect.php";

    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    echo $login;
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm && !empty($password) && !empty($password_confirm)) {

        $select="SELECT * FROM USERS WHERE USER_LOGIN='$login'";
        $check_user = oci_parse($c,$select);
        OCIExecute($check_user, OCI_DEFAULT);
        $row=oci_fetch_array($check_user, OCI_ASSOC);

        if($login == $row['USER_LOGIN']){
            $_SESSION['message'] = 'Пользователь существует!';
            header('Location: ../register.php'); 
        }
        else{
        $password = md5($password);
        $s = OCIParse($c, "INSERT INTO USERS (USER_ID, USER_NAME, USER_LOGIN, EMAIL, PASSWORD) VALUES (NULL, '$full_name', '$login', '$email', '$password')");
        OCIExecute($s, OCI_DEFAULT);

        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../index.php');
        } 
    }
        else {
        $_SESSION['message'] = 'Пароль введен некорркетно';
        header('Location: ../register.php');
        }
    
    OCICommit($c);
    // Отключаемся от бд
    OCILogoff($c);
?>
